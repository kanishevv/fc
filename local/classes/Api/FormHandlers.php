<?php

namespace Local\Api;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Service\GeoIp\Manager;
use Bitrix\Main\Type\DateTime;
use Local\Validation\Rule\Phone;
use Local\Validation\Rule\Captсha;
use Local\Validation\Rule\Privacy;
use Local\Validation\Rule\Sessid;
use Local\Base\Helper;
use Rakit\Validation\Validator;
use CIBlockElement;
use CModule;
use Bitrix\Main\Mail\Event;

class FormHandlers
{
    /**
     * Преобразует массив файлов из формы в битриксовый формат
     * @param $aFiles array массив файлов из формы
     * @return array
     */
    public static function formatFormFilesArray($aFiles)
    {
        $aFilesReturn = [];
        foreach ($aFiles["name"] as $iKey => $sName) {
            $aFilesReturn[] = [
                "name" => $sName,
                "type" => $aFiles["type"][$iKey] ?: "",
                "tmp_name" => $aFiles["tmp_name"][$iKey] ?: "",
                "error" => $aFiles["error"][$iKey] ?: "",
                "size" => $aFiles["size"][$iKey] ?: 0
            ];
        }

        return $aFilesReturn;
    }

	/**
	 * Обработчик формы Задать вопрос
	 *
	 * @param $oRequest
	 * @return array|int[]
	 */
	public static function feedbackFormHandler($oRequest, $aFiles = [], $bApi = false)
	{
		if (!CModule::IncludeModule("iblock")) {
			return [
				"status" => 500,
				"message" => Loc::getMessage("FORM_SERVER_ERROR")
			];
		}

        $sFileTypes = Helper::getFileTypes(["image", "docs"]);

		// Валидация
		$validator = new Validator(
			[
				'required' => Loc::getMessage("FORM_ERROR_REQUIRED"),
				'privacy' => Loc::getMessage("FORM_ERROR_PRIVACY"),
				'email' => Loc::getMessage("FORM_ERROR_EMAIL"),
				'phone' => Loc::getMessage("FORM_ERROR_PHONE"),
                'captcha' => Loc::getMessage("FORM_ERROR_CAPTCHA"),
                "uploaded_file" => Loc::getMessage("FORM_ERROR_FILE", ["sFileTypes" => $sFileTypes]),
				'text:max' => Loc::getMessage("FORM_ERROR_MAX")
			]
		);

		$validator->addValidator('phone', new Phone());
		$validator->addValidator('captcha', new Captсha($oRequest["captcha_sid"]));
		$validator->addValidator('sessid', new Sessid());
		$validator->addValidator('privacy', new Privacy());

		$sSessidValidateParams = $bApi ? 'sessid' : 'required|sessid';
		$validation = $validator->validate($oRequest + $aFiles, [
			'user_last_name' => 'required',
			'user_first_name' => 'required',
			'user_email' => 'required|email',
			'user_phone' => 'nullable|phone',
			'text' => 'required|max:3500',
			'file.*' => "uploaded_file|max:10M|mimes:$sFileTypes",
			'privacy' => 'required|privacy',
			'captcha_word' => 'captcha',
			'sessid' => $sSessidValidateParams
		]);

		// Если есть ошибки валидации отправляем с кодом неверный запрос
		if ($validation->fails()) {
			$errors = $validation->errors()->all('<p>:message</p>');

			return [
				'status' => 400,
				'errors' => $errors
			];
		}

		global $USER;
		$aProps = [
			"FIO" => $oRequest["user_last_name"] ?: "",
			"NAME" => $oRequest["user_first_name"] ?: "",
			"OTCH" => $oRequest["user_other_name"] ?: "",
			"PHONE" => $oRequest["user_phone"] ?: "",
			"POSTAL_ADRESS" => $oRequest["user_post_address"] ?: "",
			"EMAIL" => $oRequest["user_email"] ?: "",
			"FILE" => self::formatFormFilesArray($aFiles["file"]),
			"USERIP" => Manager::getRealIp() ?: "",
			"USER_ID" => $USER->GetID() ?: "",
		];

		$oNewElement = new CIBlockElement();
		if (!$oNewElement->Add(
			[
				"IBLOCK_ID" => Helper::getIblockId("feedback"),
				"PREVIEW_TEXT" => $oRequest["text"],
				"PROPERTY_VALUES" => $aProps,
				"NAME" => new DateTime(),
			]
		)) {
			return [
				"status" => 500,
				"message" => Loc::getMessage("FORM_SERVER_ERROR")
			];
		}

		if (CModule::IncludeModule("wsrubi.smtp")) {
			// Отправляем письмо об успешном сохранении формы
			$sEmail = $_ENV["EMAIL_FOR_NOTIFY"];
			$sSiteUrl = $_SERVER["HTTP_ORIGIN"];
			$sDomen = $_SERVER["SERVER_NAME"];

			if (is_string($sEmail)) {
				custom_mail(
					$sEmail,
					"[$sDomen] Новое обращение",
					"На сайт $sSiteUrl из формы «Задать вопрос» пришло новое обращение.",
					"From: service@fcoz.ru"
				);
			}
		}

		return [
			"status" => 200,
			"message" => Loc::getMessage("FORM_SUCCESS")
		];
	}
}
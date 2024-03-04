<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arRubric
 */

use \Bitrix\Iblock\Elements\ElementContentDocumentsTable;
use Bitrix\Main\Localization\Loc;

\Bitrix\Main\Loader::includeModule('iblock');
$aItems = ElementContentDocumentsTable::getList([
	"filter" => [
		"=IBLOCK_ID" => \Local\Base\Helper::getIblockId('content_documents'),
		"=ACTIVE" => "Y",
		">DATE_CREATE" => $arRubric["START_TIME"],
		"<=DATE_CREATE" => $arRubric["END_TIME"]
	],
	"select" => [
		"ID",
		"NAME",
		"PREVIEW_TEXT",
		"DETAIL_TEXT",
        "LINK",
        "DOCUMENT_TYPE",
        "CREATOR",
        "DATE_NUM_DOC"
	],
	"cache" => [
		"ttl" => 28800
	]
])->fetchAll();

$sDateFrom = ConvertDateTime($arRubric["START_TIME"], "DD.MM.YYYY");
$sDateTo = ConvertDateTime($arRubric["END_TIME"], "DD.MM.YYYY");

if ($aItems) {
	?>
    <h1>Новые документы недели с <?= $sDateFrom ?> по <?= $sDateTo ?></h1>
    <div style="max-width: 600px;">
		<?php
		foreach ($aItems as $aItem) {
            $sName = "";

            if($s = $aItem["IBLOCK_ELEMENTS_ELEMENT_CONTENT_DOCUMENTS_DOCUMENT_TYPE_VALUE"]) {
                $sName .= $s . "<br/>";
            }

            if ($s = $aItem["IBLOCK_ELEMENTS_ELEMENT_CONTENT_DOCUMENTS_CREATOR_VALUE"]) {
	            $sName .= $s . "<br/>";
            }

            if ($s = $aItem["IBLOCK_ELEMENTS_ELEMENT_CONTENT_DOCUMENTS_DATE_NUM_DOC_VALUE"]) {
                $sName .= $s . "<br/>";
            }

			?><a href="<?= $aItem["IBLOCK_ELEMENTS_ELEMENT_CONTENT_DOCUMENTS_LINK_VALUE"] ?: "#" ?>" target="_blank">
            <h3><?= $sName ?></h3>
            <p><?= $aItem["PREVIEW_TEXT"] ?></p>
            </a>
            <hr>
			<?php
		}
		?>
    </div>

    <p>
        <a href="<?= $_SERVER["HTTP_ORIGIN"] . "/?action=unsubscribe&mid=#MAIL_ID#" ?>">
            Отписаться от всех рассылок
        </a>
    </p>

	<?php
	return [
		"SUBJECT" => $arRubric["NAME"],
		"BODY_TYPE" => "html",
		"CHARSET" => "UTF-8",
		"DIRECT_SEND" => "Y",
		"FROM_FIELD" => $arRubric["FROM_FIELD"]
	];
}

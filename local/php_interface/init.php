<?php

// composer autoload и dotenv подключаются в файлах конфигурации ядра
// bitrix/.settings.php и bitrix/php_interface/dbconn.php
// которые в свою очередь можно обновить, отредактировав данные в директории /environments/
// и "перезагрузить" командой `./vendor/bin/jedi env:init default`



// так как  автолоад (в нашем случае) регистрируется до ядра,
// Твиг не успевает зарегистрироваться
// необходимо это действие повтроить еще раз:

AddEventHandler(
    'search',
    'BeforeIndex',
    function ($arFields)
    {
        $arFields['RUBADF'] = 'test';
    
        if ($arFields['MODULE_ID'] == 'iblock') {
            $dbProps = CIBlockElement::GetProperty(
                $arFields['PARAM2'],
                $arFields['ITEM_ID'],
                [
                    'sort' => 'asc'
                ],
                [
                    'CODE' => 'RUBRIC'
                ]
            );

            if ($arProps = $dbProps->Fetch()) {
                $arFields['RUBRIC'] = $arProps['VALUE'];
            }
        }
    
        return $arFields;
    }
);

maximasterRegisterTwigTemplateEngine();

Arrilot\BitrixModels\ServiceProvider::register();
Arrilot\BitrixModels\ServiceProvider::registerEloquent();

Bex\Monolog\MonologAdapter::loadConfiguration();

include_once 'events.php';

// Внешний почтовый сервис SMTP
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/wsrubi.smtp/classes/general/wsrubismtp.php");

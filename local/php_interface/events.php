<?php

use Kint\Twig\TwigExtension;
use Bitrix\Main\EventResult;
use Akh\BitrixOptimization\Image;
use Bitrix\Main\EventManager;

// Image::initEvents($option = []);

AddEventHandler(
    '',
    'onAfterTwigTemplateEngineInited',
    function (\Twig_Environment $engine) {

        $engine->addExtension(new TwigExtension());
        $engine->getExtension('core')->setTimezone('Europe/Moscow');

        return new EventResult(EventResult::SUCCESS, array($engine));
    }
);

EventManager::getInstance()->addEventHandler("main", "OnProlog", ["\\Local\\Base\\Load", "initClasses"], 100);
EventManager::getInstance()->addEventHandler(
	"subscribe",
	"BeforePostingSendMail",
	["\\Local\\Events\\SubscribeHandlers", "BeforePostingSendMailHandler"],
	200
);


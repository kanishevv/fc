<?php

use Local\Api\Router;

define("LANGUAGE_ID", "ru");
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

CModule::AddAutoloadClasses(
    '',
    [
        'RouterSearch' => '/api/routers/RouterSearch.php',
        'RouterDetail' => '/api/routers/RouterDetail.php',
	    'RouterDocumentReference' => '/api/routers/RouterDocumentReference.php',
	    'RouterFeedbackForm' => '/api/routers/RouterFeedbackForm.php',
	    'RouterGetCaptcha' => '/api/routers/RouterGetCaptcha.php',
	    'RouterGetListValues' => '/api/routers/RouterGetListValues.php',
	    'RouterGetRubricValues' => '/api/routers/RouterGetRubricValues.php',
	    'RouterGetCategoryList' => '/api/routers/RouterGetCategoryList.php'
    ]
);

$router = new Router();
$router->run();

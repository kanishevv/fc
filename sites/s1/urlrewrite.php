<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/#',
    'RULE' => '',
    'ID' => 'bitrix:support.faq',
    'PATH' => '/zakonodatelstvo-ob-obrazovanii/sudebnaya-praktika/sudebnaya-praktika.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/grazhdanam/faq/([a-zA-Z0-9\\.\\-_]+)/?.*#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news.detail',
    'PATH' => '/grazhdanam/faq/detail.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/personal/lists/#',
    'RULE' => '',
    'ID' => 'bitrix:lists',
    'PATH' => '/personal/lists/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/faq/#',
    'RULE' => '',
    'ID' => 'bitrix:support.faq',
    'PATH' => '/faq/index.php',
    'SORT' => 100,
  ),
);

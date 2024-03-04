<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arRubric
 */

use \Bitrix\Iblock\Elements\ElementMontlyReviewsTable;
use Bitrix\Main\Localization\Loc;

\Bitrix\Main\Loader::includeModule("iblock");
$aItems = ElementMontlyReviewsTable::getList([
	"filter" => [
		"=IBLOCK_ID" => \Local\Base\Helper::getIblockId("ezhemesyachnye-obzory-zakonodatelstva-ob-obrazovan"),
		"=ACTIVE" => "Y",
		">DATE_CREATE" => $arRubric["START_TIME"],
		"<=DATE_CREATE" => $arRubric["END_TIME"]
	],
	"select" => [
		"ID",
        "NAME",
        "IBLOCK_SECTION_ID"
	],
	"cache" => [
		"ttl" => 28800
	]
])->fetchAll();

$sDateFrom = ConvertDateTime($arRubric["START_TIME"], "DD.MM.YYYY");
$sDateTo = ConvertDateTime($arRubric["END_TIME"], "DD.MM.YYYY");

if ($aItems) {
	?>
    <h1>Новые ежемесячные обзоры с <?= $sDateFrom ?> по <?= $sDateTo ?></h1>
    <div style="max-width: 600px;">
		<?php
		foreach ($aItems as $aItem) {
			?><a href="<?= $_SERVER["HTTP_ORIGIN"] ?>/zakonodatelstvo-ob-obrazovanii/ezhemesyachnye-obzory-zakonodatelstva-ob-obrazovanii/list.php?SECTION_ID=<?= $aItem["IBLOCK_SECTION_ID"] ?: "#" ?>" target="_blank">
            <h3><?= $aItem["NAME"] ?></h3>
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

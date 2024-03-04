<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arRubric
 */

use \Bitrix\Iblock\Elements\ElementContentFaqTable;
use Bitrix\Main\Localization\Loc;

\Bitrix\Main\Loader::includeModule("iblock");
$aItems = ElementContentFaqTable::getList([
	"filter" => [
		"=IBLOCK_ID" => \Local\Base\Helper::getIblockId("content_faq"),
		"=ACTIVE" => "Y",
		">DATE_CREATE" => $arRubric["START_TIME"],
		"<=DATE_CREATE" => $arRubric["END_TIME"]
	],
	"select" => [
		"ID",
		"PREVIEW_TEXT",
		"DETAIL_TEXT"
	],
	"cache" => [
		"ttl" => 28800
	]
])->fetchAll();

$sDateFrom = ConvertDateTime($arRubric["START_TIME"], "DD.MM.YYYY");
$sDateTo = ConvertDateTime($arRubric["END_TIME"], "DD.MM.YYYY");

if ($aItems) {
	?>
    <h1>Новые вопросы и ответы с <?= $sDateFrom ?> по <?= $sDateTo ?></h1>
    <div style="max-width: 600px;">
		<?php
		foreach ($aItems as $aItem) {
			if (strlen($aItem["DETAIL_TEXT"]) > 200) {
				$sDetailText = TruncateText(
					$aItem["DETAIL_TEXT"],
					200
				);
			} else {
				$sDetailText = $aItem["DETAIL_TEXT"];
			}
			?><a href="<?= $_SERVER["HTTP_ORIGIN"] ?>/grazhdanam/faq/detail.php?ELEMENT_ID=<?= $aItem["ID"] ?>"
                 target="_blank">
            <h3><?= $aItem["PREVIEW_TEXT"] ?></h3>
            <p><?= $sDetailText ?></p>
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

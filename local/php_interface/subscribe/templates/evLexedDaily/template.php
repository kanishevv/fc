<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arRubric
 */

use \Bitrix\Iblock\Elements\ElementEvLexedTable;
use Bitrix\Main\Localization\Loc;

\Bitrix\Main\Loader::includeModule("iblock");
$aItems = ElementEvLexedTable::getList([
	"filter" => [
		"=IBLOCK_ID" => \Local\Base\Helper::getIblockId("ev_lexed"),
		"=ACTIVE" => "Y",
		">DATE_CREATE" => $arRubric["START_TIME"],
		"<=DATE_CREATE" => $arRubric["END_TIME"]
	],
	"select" => [
		"ID",
		"NAME",
		"PREVIEW_TEXT",
		"PREVIEW_PICTURE"
	],
	"cache" => [
		"ttl" => 28800
	]
])->fetchAll();

$sDateFrom = ConvertDateTime($arRubric["START_TIME"], "DD.MM.YYYY");
$sDateTo = ConvertDateTime($arRubric["END_TIME"], "DD.MM.YYYY");

if ($aItems) {
	?>
    <h1>Новые мероприятия с <?= $sDateFrom ?> по <?= $sDateTo ?></h1>
    <div style="max-width: 600px;">
		<?php
		foreach ($aItems as $aItem) {
			if (strlen($aItem["PREVIEW_TEXT"]) > 200) {
				$sText = TruncateText(strip_tags($aItem["PREVIEW_TEXT"]), 200);
			} else {
				$sText = $aItem["PREVIEW_TEXT"];
			}

			if ($iId = $aItem["PREVIEW_PICTURE"]) {
				$sImgSrc = $_SERVER["HTTP_ORIGIN"] . CFile::GetPath($iId);
			}

            $sUrl = $_SERVER["HTTP_ORIGIN"] . "/grazhdanam/novosti/meropriyatiya/detail.php?ELEMENT_ID=" . $aItem["ID"];
			?>
            <a href="<?= $sUrl ?: "#" ?>" target="_blank">
				<?php if ($sImgSrc) { ?>
                    <img height="250" src="<?= $sImgSrc ?>" alt="<?= $aItem["NAME"] ?>"/>
				<?php } ?>
                <h3><?= $aItem["NAME"] ?></h3>
                <p>
					<?= $sText ?>
                </p>
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

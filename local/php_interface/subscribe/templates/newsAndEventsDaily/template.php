<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @var array $arRubric
 */

use \Bitrix\Iblock\Elements\ElementNewsS1Table;
use Bitrix\Main\Localization\Loc;

\Bitrix\Main\Loader::includeModule("iblock");
$aItems = ElementNewsS1Table::getList([
	"filter" => [
		"=IBLOCK_ID" => \Local\Base\Helper::getIblockId("news_s1"),
		"=ACTIVE" => "Y",
		">DATE_CREATE" => $arRubric["START_TIME"],
		"<=DATE_CREATE" => $arRubric["END_TIME"]
	],
	"select" => [
		"ID",
		"NAME",
		"PREVIEW_TEXT",
		"PREVIEW_PICTURE",
		"IBLOCK_ID",
		"IBLOCK_SECTION_ID",
		"DETAIL_PAGE_URL" => "IBLOCK.DETAIL_PAGE_URL"
	],
	"cache" => [
		"ttl" => 28800
	]
])->fetchAll();

$sDateFrom = ConvertDateTime($arRubric["START_TIME"], "DD.MM.YYYY");
$sDateTo = ConvertDateTime($arRubric["END_TIME"], "DD.MM.YYYY");

if ($aItems) {
	?>
    <h1>Новые новости и события с <?= $sDateFrom ?> по <?= $sDateTo ?></h1>
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

			if ($s = $aItem["IBLOCK_ELEMENTS_ELEMENT_BANNERS_S1_URL_VALUE"]) {
				if (parse_url($s)["host"]) {
					$sUrl = $s;
				} else {
					$sUrl = $_SERVER["HTTP_ORIGIN"] . $s;
				}
			} else {
				$sUrl = \CIBlock::ReplaceDetailUrl($aItem['DETAIL_PAGE_URL'], $aItem, false, 'E');
			}
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

<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$assetManager = new Local\Util\Assets();

CModule::IncludeModule('iblock');

$dbEnumList = CIBlockProperty::GetPropertyEnum("DOCTYPE", array('VALUE' => 'ASC'), array('IBLOCK_ID' => 17));
while ($arEnumList = $dbEnumList->GetNext())
	$arDocType[] = $arEnumList;


$dbEnumList = CIBlockProperty::GetPropertyEnum("ACCEPTOR", array('VALUE' => 'ASC'), array('IBLOCK_ID' => 17));
while ($arEnumList = $dbEnumList->GetNext())
	$arAccType[] = $arEnumList;

$APPLICATION->SetTitle("База нормативных актов в сфере образования"); ?>
<div>
<div class="page__subtitle">Поиск по тематике</div>

<?php $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"tree",
	array(
		"IBLOCK_TYPE" => "law_about_education",
		"IBLOCK_ID" => "17",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "100",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_URL" => "/education-act-base/list.php?SECTION_ID=#SECTION_ID#",
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
); ?>

<div class="page__subtitle">Поиск по реквизитам</div>

<form class="form search-form search-form--documents" method="GET" name="form1" action="/education-act-base/search.php">
	<div class="search-form__result-wrap">
		<div class="search-form__field">
			<div class="search-form__input input input--search">
				<svg class="input__icon icon">
					<use xlink:href="<?= $assetManager->getEntry('icons/sprite.svg') ?>#search_loupe"></use>
				</svg>
				<div class="input__wrapper">
					<input type="text" name="q" value="<?= htmlspecialchars($_REQUEST['q']) ?>" size="15" maxlength="50" placeholder='Пример: "ЕГЭ", "диплом государственного образца", "вступительные испытания"'>
				</div>
			</div>
		</div>
	</div>
	<div class="search-form__result-wrap">
		<div class="search-form__field form__field">
			<input id="in_name" type="checkbox" value="Y" name="in_name" <?php ($_REQUEST['in_name'] == "Y") ? 'checked' : '' ?> />
			<label for="in_name">в названии</label>
		</div>
	</div>

	<div class="search-form__row">
		<div class="search-form__field form__field">
			<select name="DOCTYPE">
				<option value="">Вид документа</option>
				<?php foreach ($arDocType as $docType) { ?>
					<option value="<?= $docType['ID'] ?>" <?php ($_REQUEST['DOCTYPE'] == $docType['ID']) ? 'selected' : '' ?>><?= $docType['VALUE'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="search-form__field form__field">
			<select name="ACCEPTOR">
				<option value="">Документ органа</option>
				<?php foreach ($arAccType as $accType) { ?>
					<option value="<?= $accType['ID'] ?>" <?php ($_REQUEST['ACCEPTOR'] == $accType['ID']) ? 'selected' : '' ?>><?= $accType['VALUE'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="search-form__field form__field">
			<div class="input">
				<div class="input__wrapper">
					<input id="REGN" type="text" name="REGN" value="<?= htmlspecialchars($_REQUEST['REGN']) ?>" />
					<label for="REGN">Номер документа</label>
				</div>
			</div>
		</div>
		<div class="search-form__field form__field">
			<div class="input">
				<div class="input__wrapper">
					<input id="DateFrom" type="text" name="DATE_FROM" class="form__date" value="<?= htmlspecialchars($_REQUEST['DATE_FROM']) ?>" />
					<label for="DateFrom">Дата от</label>
					<style>
						.input__wrapper {
							position: relative;
						}

						.calendar-icon {
							position: absolute !important;
							right: 10px;
							top: 10px;
						}
					</style>
					<script>
						$('.form__date').on('click', function() {
							$(this).children('.calendar-icon').click();
						})
					</script>
					<?php $APPLICATION->IncludeComponent(
						"bitrix:main.calendar",
						"",
						array(
							"SHOW_INPUT" => "N",
							"FORM_NAME" => "form1",
							"INPUT_NAME" => "DATE_FROM",
							"INPUT_NAME_FINISH" => "",
							"INPUT_VALUE" => "",
							"INPUT_VALUE_FINISH" => "",
							"SHOW_TIME" => "N",
							"HIDE_TIMEBAR" => "Y"
						)
					); ?>
				</div>
			</div>
		</div>
		<div class="search-form__field form__field">
			<div class="input">
				<div class="input__wrapper">
					<input id="DateTo" type="text" name="DATE_TO" class="form__date" value="<?= htmlspecialchars($_REQUEST['DATE_TO']) ?>" />
					<label for="DateTo">Дата от</label>
					<?php $APPLICATION->IncludeComponent(
						"bitrix:main.calendar",
						"",
						array(
							"SHOW_INPUT" => "N",
							"FORM_NAME" => "form1",
							"INPUT_NAME" => "DATE_TO",
							"INPUT_NAME_FINISH" => "",
							"INPUT_VALUE" => "",
							"INPUT_VALUE_FINISH" => "",
							"SHOW_TIME" => "N",
							"HIDE_TIMEBAR" => "Y"
						)
					); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="search-form__row">
		<button class="search-form__btn-submit">Найти</button>
		<button class="search-form__btn-reset" type="reset" name="res">Сбросить</button>
	</div>
</form>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
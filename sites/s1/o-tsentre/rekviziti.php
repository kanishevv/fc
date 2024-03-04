<?php
/**
 * @var CMain $APPLICATION
 */
define("TITLE_CENTER", true);
define("TITLE_MARGIN_BOTTOM_32", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Реквизиты");
?>

<div class="content">
    <hr />
    <p class="content-title content-title--center" style="font-size: 20px; margin-bottom: 16px; color: #414d5d;">Полное наименование</p>
    <p>Федеральное государственное бюджетное научное учреждение "Федеральный центр образовательного законодательства" (ФГБНУ «ФЦОЗ»)</p>
    <hr />
    <p class="content-title content-title--center" style="font-size: 20px; margin-bottom: 16px; color: #414d5d;">Адрес организации</p>
    <p style="margin-bottom: 16px;"><b>Юридический адрес:</b> 115419, г. Москва, ул. Орджоникидзе, д.3</p>
    <p style="margin-bottom: 16px;"><b>Телефон:</b> +7 (495) 955-07-61 </p>
    <p style="margin-bottom: 16px;"><b>E-mail:</b> info@fcoz.ru</p>
    <hr />
    <p class="content-title content-title--center" style="font-size: 20px; margin-bottom: 16px; color: #414d5d;">Банковские реквизиты</p>
    <div class="req-container" style="position: relative; display: flex; flex-wrap: wrap;">
        <div style="width: calc(50% - 16px); margin-right: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">Банк</b></p>
            <p>ГУ БАНКА РОССИИ ПО ЦФО г. Москва 35</p>
        </div>
        <div style="width: calc(50% - 16px); margin-left: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">Получатель</b></p>
            <p>УФК по г. Москве (ФГБНУ «ФЦОЗ»)</p>
        </div>
        <div style="width: calc(50% - 16px); margin-right: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">Расчетный счет</b></p>
            <p>№ 40501810845252000079</p>
        </div>
        <div style="width: calc(50% - 16px); margin-left: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">Лицевой счёт</b></p>
            <p>№ 40501810845252000079</p>
        </div>
        <div style="width: calc(50% - 16px); margin-right: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">БИК</b></p>
            <p>044525000</p>
        </div>
        <div style="width: calc(50% - 16px); margin-left: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">КПП</b></p>
            <p>772501001</p>
        </div>
        <div style="width: calc(50% - 16px); margin-right: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">ИНН</b></p>
            <p>7701210947</p>
        </div>
        <div style="width: calc(50% - 16px); margin-left: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">ОГРН</b></p>
            <p>1037739343883</p>
        </div>
        <div style="width: calc(50% - 16px); margin-right: 8px; background-color: #f6fbff; padding: 16px; margin-bottom: 16px;">
            <p><b style="font-family: PT Serif; font-size: 16px; font-weight: 700; color: #414d5d;">ОКАТО</b></p>
            <p>45296561000</p>
        </div>
    </div>
    <a style="border-radius: 2px; display: inline-block; background-color: #315a7b; padding: 10px 32px; color: #fff; font-size: 14px; line-height: 24px; position: relative; left: 50%; transform: translate3d(-50%, 0, 0);" href="#">Скачать реквизиты</a>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

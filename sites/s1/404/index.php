<?

include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Страница не найдена");
?><div align="center">
	<p>
 <b>Уважаемые пользователи! </b> <br>
 <br>
	</p>
	<p>
	</p>
	<p>
	</p>
	<div align="left">
		 Страница не найдена на сайте. Воспользуйтесь <a href="/search/">поиском по базе актов,</a><a href="/full-search/?s=&q="> общим поиском по сайту</a> или перейдите на <a href="http://lexed.ru/index.php">главную </a>страницу
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
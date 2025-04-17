<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
use Bitrix\Main\Application;
$requestedPage = Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory();
echo "<pre>Requested Page Directory: ";
var_dump($requestedPage);
echo "</pre>";
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
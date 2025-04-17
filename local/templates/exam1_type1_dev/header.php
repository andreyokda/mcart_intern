<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";
?>
<main class="main">

<?php
use Bitrix\Main\Application;
$isMainPage = Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory() === '/s2/';

if (!$isMainPage): ?>
    
<div class="page-title dark-background">
    <div class="container position-relative">
        <h1><?echo $APPLICATION->ShowTitle();?> </h1>
        <p><?=$APPLICATION->ShowProperty('PAGE_TEXT_UNDER_TITLE') ?: ''?></p>
        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumb_dev",
            Array(
                "PATH" => "",
                "SITE_ID" => "s2",
                "START_FROM" => "0"
            )
        );?>
    </div>
</div>


<?php endif; ?>

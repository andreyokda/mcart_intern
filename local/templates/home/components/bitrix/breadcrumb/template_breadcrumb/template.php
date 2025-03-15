<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if (empty($arResult)) return "";

$strReturn = "";

// Подключаем стили, если они не загружены
$css = $APPLICATION->GetCSSArray();
if (!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css)) {
    $strReturn .= '<link href="' . CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css") . '" type="text/css" rel="stylesheet" />' . "\n";
}

// Получаем заголовок текущей страницы
$pageTitle = $APPLICATION->GetTitle();

// Добавляем секцию с фоновым изображением
$strReturn .= '
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/local/templates/home/images/hero_bg_2.jpg); background-position: 50% -80.3px;" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">' . htmlspecialchars($pageTitle) . '</h1>
                <div class="bx-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

// Генерация хлебных крошек
$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $arrow = ($index > 0 ? '<span class="mx-2 text-white">&bullet;</span>' : '');

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '
            ' . $arrow . '<a href="' . $arResult[$index]["LINK"] . '">' . $title . '</a>';
    } else {
        $strReturn .= '
            ' . $arrow . '<strong class="text-white">' . $title . '</strong>';
    }
}

$strReturn .= '
                </div>
            </div>
        </div>
    </div>
</div>';

return $strReturn;

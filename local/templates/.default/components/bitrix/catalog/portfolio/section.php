<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
$this->addExternalCss("/bitrix/css/main/bootstrap.css");

if (!isset($arParams['FILTER_VIEW_MODE']) || (string)$arParams['FILTER_VIEW_MODE'] == '')
    $arParams['FILTER_VIEW_MODE'] = 'VERTICAL';
$arParams['USE_FILTER'] = (isset($arParams['USE_FILTER']) && $arParams['USE_FILTER'] == 'Y' ? 'Y' : 'N');

$isVerticalFilter = ('Y' == $arParams['USE_FILTER'] && $arParams["FILTER_VIEW_MODE"] == "VERTICAL");
$isSidebar = ($arParams["SIDEBAR_SECTION_SHOW"] == "Y" && isset($arParams["SIDEBAR_PATH"]) && !empty($arParams["SIDEBAR_PATH"]));
$isFilter = ($arParams['USE_FILTER'] == 'Y');
?>
<div class="row">
<?
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "template_section",
    array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
        "SECTION_USER_FIELDS" => $arParams["SECTION_USER_FIELDS"],
        "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
        "ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
        "ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
        "ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
        "FILTER_NAME" => $arParams["FILTER_NAME"],
        "INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
        "SHOW_ALL_WO_SECTION" => $arParams["SHOW_ALL_WO_SECTION"],
        "PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
        "LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
        "PROPERTY_CODE" => $arParams["PROPERTY_CODE"],
        "OFFERS_FIELD_CODE" => $arParams["OFFERS_FIELD_CODE"],
        "OFFERS_PROPERTY_CODE" => $arParams["OFFERS_PROPERTY_CODE"],
        "OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
        "OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
        "OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
        "OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
        "OFFERS_LIMIT" => $arParams["OFFERS_LIMIT"],
        "TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
        "PRODUCT_DISPLAY_MODE" => $arParams["PRODUCT_DISPLAY_MODE"],
        "ADD_PICT_PROP" => $arParams["ADD_PICT_PROP"],
        "LABEL_PROP" => $arParams["LABEL_PROP"],
        "OFFER_ADD_PICT_PROP" => $arParams["OFFER_ADD_PICT_PROP"],
        "OFFER_TREE_PROPS" => $arParams["OFFER_TREE_PROPS"],
        "PRODUCT_SUBSCRIPTION" => $arParams["PRODUCT_SUBSCRIPTION"],
        "SHOW_DISCOUNT_PERCENT" => $arParams["SHOW_DISCOUNT_PERCENT"],
        "SHOW_OLD_PRICE" => $arParams["SHOW_OLD_PRICE"],
        "SHOW_CLOSE_POPUP" => $arParams["SHOW_CLOSE_POPUP"],
        "MESS_BTN_BUY" => $arParams["MESS_BTN_BUY"],
        "MESS_BTN_ADD_TO_BASKET" => $arParams["MESS_BTN_ADD_TO_BASKET"],
        "MESS_BTN_SUBSCRIBE" => $arParams["MESS_BTN_SUBSCRIBE"],
        "MESS_BTN_DETAIL" => $arParams["MESS_BTN_DETAIL"],
        "MESS_NOT_AVAILABLE" => $arParams["MESS_NOT_AVAILABLE"],
        "ADD_TO_BASKET_ACTION" => $arParams["ADD_TO_BASKET_ACTION"],
        "AJAX_MODE" => $arParams["AJAX_MODE"],
        "AJAX_OPTION_JUMP" => $arParams["AJAX_OPTION_JUMP"],
        "AJAX_OPTION_STYLE" => $arParams["AJAX_OPTION_STYLE"],
        "AJAX_OPTION_HISTORY" => $arParams["AJAX_OPTION_HISTORY"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_FILTER" => $arParams["CACHE_FILTER"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "SET_TITLE" => $arParams["SET_TITLE"],
        "SET_BROWSER_TITLE" => $arParams["SET_BROWSER_TITLE"],
        "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
        "SET_META_KEYWORDS" => $arParams["SET_META_KEYWORDS"],
        "META_KEYWORDS" => $arParams["META_KEYWORDS"],
        "SET_META_DESCRIPTION" => $arParams["SET_META_DESCRIPTION"],
        "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
        "USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
        "ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
        "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
        "SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
        "DISPLAY_COMPARE" => $arParams["DISPLAY_COMPARE"],
        "PRICE_CODE" => $arParams["PRICE_CODE"],
        "USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
        "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
        "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
        "CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
        "BASKET_URL" => $arParams["BASKET_URL"],
        "USE_PRODUCT_QUANTITY" => $arParams["USE_PRODUCT_QUANTITY"],
        "ADD_PROPERTIES_TO_BASKET" => $arParams["ADD_PROPERTIES_TO_BASKET"],
        "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
        "PARTIAL_PRODUCT_PROPERTIES" => $arParams["PARTIAL_PRODUCT_PROPERTIES"],
        "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
        "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
        "BACKGROUND_IMAGE" => $arParams["BACKGROUND_IMAGE"],
        "DISABLE_INIT_JS_IN_COMPONENT" => $arParams["DISABLE_INIT_JS_IN_COMPONENT"],
        "HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
        "HIDE_NOT_AVAILABLE_OFFERS" => $arParams["HIDE_NOT_AVAILABLE_OFFERS"],
        "COMPATIBLE_MODE" => $arParams["COMPATIBLE_MODE"],
        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
        "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        "LAZY_LOAD" => $arParams["LAZY_LOAD"],
        "MESS_BTN_LAZY_LOAD" => $arParams["MESS_BTN_LAZY_LOAD"],
        "LOAD_ON_SCROLL" => $arParams["LOAD_ON_SCROLL"],
        "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
        "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
        "USE_FILTER" => $arParams["USE_FILTER"],
        "FILTER_VIEW_MODE" => $arParams["FILTER_VIEW_MODE"],
        "SIDEBAR_SECTION_SHOW" => $arParams["SIDEBAR_SECTION_SHOW"],
        "SIDEBAR_PATH" => $arParams["SIDEBAR_PATH"],
    ),
    $component
);
?>
</div>
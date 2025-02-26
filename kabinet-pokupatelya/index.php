<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кабинет покупателя");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
	Array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => ""
	)
);?><br>
 <br>
<?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form", 
	".default", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"PAGE" => "#SITE_DIR#about/subscr_edit.php",
		"SHOW_HIDDEN" => "Y",
		"USE_PERSONALIZATION" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?><main class="main"> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/.default/include/main/hero.php"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"", 
	Array(
	"AREA_FILE_SHOW" => "file",	
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",	
		"PATH" => "/local/templates/.default/include/main/featured-services.php",
	),
	false
);?> <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/.default/include/main/about.php"
	)
);?> 
</main>
<!-- Scroll Top --> <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Preloader --> <div id="preloader"><br></div>
 <br>
 <br>
 <br>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
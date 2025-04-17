<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
require_once __DIR__.'/boot.php';
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">

<head>
  <?$APPLICATION->ShowHead();?>

  <title><?$APPLICATION->ShowTitle()?></title>

  <?php use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH.'/assets/vendor/bootstrap/css/bootstrap.min.css'); 
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH.'/assets/vendor/bootstrap-icons/bootstrap-icons.css'); 
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH.'/assets/vendor/aos/aos.css'); 
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH.'/assets/css/main.css'); 

    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
	Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/assets/vendor/aos/aos.js');
	Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/assets/js/main.js');
	
  ?>
  <link href="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/favicon.png" rel="icon">
  <link href="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">


</head>

<body class="scrolled">

  <?$APPLICATION->ShowPanel()?>

  <header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="/s2/" class="logo d-flex align-items-center">
				<h1 class="sitename"><?= getMessage("COMPANY")?></h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
					"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
						"MAX_LEVEL" => "3",	// Уровень вложенности меню
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"MENU_CACHE_TYPE" => "A",	// Тип кеширования
						"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						"COMPONENT_TEMPLATE" => "horizontal_multilevel",
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					),
					false,
					array(
					"ACTIVE_COMPONENT" => "Y"
					)
				);?>				
			</nav>

		</div>
	</header>

  

  

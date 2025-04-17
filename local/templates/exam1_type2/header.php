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
  Asset::getInstance()->addCss(DASHBOARD_TEMPLATE_PATH.'/assets/vendor/bootstrap/css/bootstrap.min.css'); 
  
	Asset::getInstance()->addCss(DASHBOARD_TEMPLATE_PATH.'/assets/vendor/bootstrap-icons/bootstrap-icons.css'); 
	Asset::getInstance()->addCss(DASHBOARD_TEMPLATE_PATH.'/assets/css/style.css');  

  Asset::getInstance()->addJs(DASHBOARD_TEMPLATE_PATH.'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
	Asset::getInstance()->addJs(DASHBOARD_TEMPLATE_PATH.'/assets/js/main.js');
	
  ?>

  <link href="<?= DASHBOARD_TEMPLATE_PATH ?>/assets/img/favicon.png" rel="icon">

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/s2/statistic_na/dashboard/index.php" class="logo d-flex align-items-center">
        <img src="<?= DASHBOARD_TEMPLATE_PATH ?>/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Статистика</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"template_auth",
	Array(
		"FORGOT_PASSWORD_URL" => "/s2/statistic_na/forget.php?forgot_password=yes",
		"PROFILE_URL" => "/s2/statistic_na/profile/",
		"SHOW_ERRORS" => "N"
	)
);?>

  </header><!-- End Header -->

  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

  <?if ($USER->IsAuthorized()):
    ?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "menu_dashboard",
        Array(
            "ALLOW_MULTI_SELECT" => "Y",
            "CHILD_MENU_TYPE" => "st_second",
            "DELAY" => "N",
            "MAX_LEVEL" => "2",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "st_first",
            "USE_EXT" => "N"
        )
    );?>

    <?endif?>


  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  <div class="pagetitle mb-4">
      <h1><?$APPLICATION->ShowTitle()?></h1>
    </div><!-- End Page Title -->

    <section class="section <?$APPLICATION->ShowProperty('page_css_class')?>">
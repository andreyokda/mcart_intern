<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">

<head>
  <?$APPLICATION->ShowHead();?>

  <title><?$APPLICATION->ShowTitle()?></title>



  <?php use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss('https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/fonts/icomoon/style.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/magnific-popup.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/jquery-ui.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/owl.carousel.min.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/owl.theme.default.min.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap-datepicker.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/mediaelementplayer.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/animate.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/fonts/flaticon/font/flaticon.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/fl-bigmug-line.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/aos.css'); 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css'); 

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-3.3.1.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-3.3.1.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-ui.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/popper.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/bootstrap.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/mediaelement-and-player.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.stellar.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.countdown.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.magnific-popup.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/bootstrap-datepicker.min.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/aos.js'); 
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
  ?>


</head>

<body>

  <?$APPLICATION->ShowPanel()?>

  <!--<div class="site-loader"></div>-->

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">

            
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                  class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include", 
                    ".default", 
                    array(
                      "AREA_FILE_RECURSIVE" => "Y",
                      "AREA_FILE_SHOW" => "sect",
                      "AREA_FILE_SUFFIX" => "tel",
                      "EDIT_TEMPLATE" => "",
                      "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                  );?>
                </span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                      "AREA_FILE_RECURSIVE" => "Y",
                      "AREA_FILE_SHOW" => "sect",
                      "AREA_FILE_SUFFIX" => "email",
                      "EDIT_TEMPLATE" => ""
                    )
                  );?>
                </span></a>
            
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_RECURSIVE" => "Y",
              "AREA_FILE_SHOW" => "sect",
              "AREA_FILE_SUFFIX" => "icon",
              "EDIT_TEMPLATE" => ""
            )
          );?>
          </div>
          
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
          <h1 class=""><a href="index.html" class="h5 text-uppercase text-black"><strong><?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            Array(
              "AREA_FILE_RECURSIVE" => "Y",
              "AREA_FILE_SHOW" => "sect",
              "AREA_FILE_SUFFIX" => "logo",
              "COMPONENT_TEMPLATE" => ".default",
              "EDIT_TEMPLATE" => ""
            )
          );?></strong></a></h1>

          

          </div>
          <div class="col-4 col-md-4 col-lg-8">
          <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "top_menu",
              Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                "DELAY" => "N",
                "MAX_LEVEL" => "4",
                "MENU_CACHE_GET_VARS" => "",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_THEME" => "site",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
              )
            );?>



          </div>

          


        </div>
      </div>
    </div>
  </div>

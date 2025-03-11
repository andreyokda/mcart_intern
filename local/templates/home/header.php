<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="ru">

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
                  class="d-none d-md-inline-block ml-2">+2 102 3923 3922</span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">info@domain.com</span></a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
            <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
            <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="index.php" class="h5 text-uppercase text-black"><strong>HomeSpace<span
                    class="text-danger">.</span></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">

                <li class="active"><a href="/">Главная</a></li>

                <li><a href="/obyavleniya">Объявления</a></li>

                <li class="has-children">
                  <a href="/o-servise">О сервисе</a>
                  <ul class="dropdown">
                    <li><a href="/o-servise/vakansii">Вакансии</a></li>
                    <li class="has-children">
                      <a href="/o-servise/kontakty">Контакты</a>
                      <ul class="dropdown">
                        <li><a href="/o-servise/kontakty/obratnaya-svyaz.php">Обратная связь</a></li>
                      </ul>
                    </li>
                    <li><a href="/o-servise/novosti">Новости</a></li>
                    <li><a href="#">Агенты</a></li>
                  </ul>
                </li>

                <li class="has-children"><a href="/kabinet-prodavtsa">Кабинет продавца</a>
                  <ul class="dropdown">
                    <li><a href="/kabinet-prodavtsa/moi-obyavleniya">Мои объявления</a></li>
                  </ul>
                </li>

                <li class="has-children"><a href="/kabinet-pokupatelya">Кабинет покупателя</a>
                  <ul class="dropdown">
                    <li><a href="/kabinet-pokupatelya/izbrannoe">Избранное</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>

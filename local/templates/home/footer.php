<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

  <footer class="site-footer">

    <div class="container">
      <div class="row">

        <div class="col-lg-4">

          <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_SHOW" => "page",
            "AREA_FILE_SUFFIX" => "about",
            "EDIT_TEMPLATE" => ""
          )
        );?><br>


        </div>
        
        

        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4"><?= GetMessage("NAVIGATION")?></h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li>
                <li><a href="#">Properties</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms</a></li>
              </ul>
            </div>

            <?$APPLICATION->IncludeComponent(
              "bitrix:menu", 
              "bootstrap_v4", 
              array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "4",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N",
                "COMPONENT_TEMPLATE" => "bootstrap_v4",
                "MENU_THEME" => "site"
              ),
              false
            );?>

          </div>

        </div>


        <div class="col-lg-4 mb-5 mb-lg-0">
          

          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "page",
              "AREA_FILE_SUFFIX" => "follow",
              "EDIT_TEMPLATE" => ""
            )
          );?><br>

        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          

          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "page",
              "AREA_FILE_SUFFIX" => "copyright",
              "EDIT_TEMPLATE" => ""
            )
          );?><br>

        </div>

      </div>
    </div>
  </footer>


</body>

</html>
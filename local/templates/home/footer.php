<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

  <footer class="site-footer">

    <div class="container">
      <div class="row">

        <div class="col-lg-4">
        <div class="mb-5">
            <h3 class="footer-heading mb-4"><?= GetMessage("ABOUT")?></h3>
            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "about",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_RECURSIVE" => "Y"
	),
	false
);?>
          </div>

          


        </div>
        
        

        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4"><?= GetMessage("NAVIGATION")?></h3>
            </div>
            <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "footer_menu",
              Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
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


        <div class="col-lg-4 mb-5 mb-lg-0">
        <h3 class="footer-heading mb-4"><?= GetMessage("FOLLOW_US")?></h3>

          <div>
          <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "follow",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_RECURSIVE" => "Y"
	),
	false
);?>
          </div>
          

          

        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">

        
              
          <?$APPLICATION->IncludeComponent(
              "bitrix:main.include", 
              ".default", 
              array(
                "AREA_FILE_SHOW" => "sect",
                "AREA_FILE_SUFFIX" => "copyright",
                "EDIT_TEMPLATE" => "",
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_RECURSIVE" => "Y"
              ),
              false
            );?>
              
          
          
        
            
            
          

          

        </div>

      </div>
    </div>
  </footer>


</body>

</html>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);

?>



<div class="row">
  <div class="col-md-12 text-center">
    <div class="site-pagination">
      
        
        
        <?
        $page = $arResult["START_PAGE"];
        while($page <= $arResult["END_PAGE"]):
        ?>
          <?if ($page == $arResult["CURRENT_PAGE"]):?>
            <a href="#" class="active"><?=$page?></a>
          <?else:?>
            <a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($page))?>"><?=$page?></a>
          <?endif?>
        <?
          $page++;
        endwhile;
        ?>
        
        <?if ($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"] - 1 && $arResult["PAGE_COUNT"] > 5):?>
          <span>...</span>
          <a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><?=$arResult["PAGE_COUNT"]?></a>
        <?endif?>
      
    </div>
  </div>
</div>
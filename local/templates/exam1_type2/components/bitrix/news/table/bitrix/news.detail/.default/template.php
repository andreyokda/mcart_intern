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
?>
<style>
        .table-detail .label {
          font-weight: 600;
          color: rgba(1, 41, 112, 0.6);
        }
        .table-detail .row {
          margin-bottom: 20px;
        }
        .table-detail .backurl {
          margin-top: 40px;
          margin-bottom: 20px;
        }
      </style>
<div class="row">
    <div class="col-lg-12">
        <div class="card table-detail">
            <div class="card-body">
                <h5 class="card-title">ID - <?=$arResult["ID"]?></h5>  
                
                <?if(!empty($arResult["DISPLAY_PROPERTIES"]["PRODUCT"]["DISPLAY_VALUE"])):?>
                    <div class="row">
                        <div class="col-2 label"><?=GetMessage("PRODUCT")?></div>
                        <div class="col-4"><?=$arResult["DISPLAY_PROPERTIES"]["PRODUCT"]["DISPLAY_VALUE"]?></div>
                    </div>
                <?endif;?>
                
                <?if(!empty($arResult["DISPLAY_PROPERTIES"]["PRODUCT_CATEGORY"]["DISPLAY_VALUE"])):?>
                    <div class="row">
                        <div class="col-2 label"><?=GetMessage("CATEGORY")?></div>
                        <div class="col-4"><?=$arResult['DISPLAY_PROPERTIES']['PRODUCT_CATEGORY']['DISPLAY_VALUE'] ?? ''?></div>
                    </div>
                <?endif;?>
                
                <?if(!empty($arResult["DISPLAY_PROPERTIES"]["CITY"]["DISPLAY_VALUE"])):?>
                    <div class="row">
                        <div class="col-2 label"><?=GetMessage("CITY")?></div>
                        <div class="col-4"><?=$arResult["DISPLAY_PROPERTIES"]["CITY"]["DISPLAY_VALUE"]?></div>
                    </div>
                <?endif;?>
                
                <?if(!empty($arResult["DISPLAY_PROPERTIES"]["QUANTITY"]["DISPLAY_VALUE"])):?>
                    <div class="row">
                        <div class="col-2 label"><?=GetMessage("QUANTITY")?></div>
                        <div class="col-4"><?=$arResult["DISPLAY_PROPERTIES"]["QUANTITY"]["DISPLAY_VALUE"]?></div>
                    </div>
                <?endif;?>
                
                <?if($arResult["DETAIL_TEXT"] <> ''):?>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="label">Описание:</div>
                            <?echo $arResult["DETAIL_TEXT"];?>
                        </div>
                    </div>
                <?endif?>
                
               
            </div>
        </div>
    </div>
</div>
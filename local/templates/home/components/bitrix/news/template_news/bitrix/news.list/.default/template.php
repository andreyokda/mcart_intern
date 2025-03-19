<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
$this->setFrameMode(true);
?>



<div class="row mb-5">

    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
                <figure>
                    <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" class="img-fluid">
                    <?endif;?>
                </figure>
                <div class="prop-text">
                    <div class="inner">
                        <?if($arItem["PROPERTIES"]["PRICE"]["VALUE"]):?>
                            <span class="price rounded">$<?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></span>
                        <?endif;?>
                        <h3 class="title"><?=$arItem["NAME"]?></h3>
                        <p class="location"><?=$arItem["PREVIEW_TEXT"]?></p>
                    </div>
                    <div class="prop-more-info">
                        <div class="inner d-flex">
                            <div class="col">
                                <?= GetMessage("AREA")?>:
                                <strong><?=$arItem["PROPERTIES"]["TOTAL_AREA"]["VALUE"] ?? '0'?>m<sup>2</sup></strong>
                            </div>
                            <div class="col">
                                <?= GetMessage("BEDS")?>:
                                <strong><?=$arItem["PROPERTIES"]["NUMBER_OF_FLOORS"]["VALUE"] ?? '0'?></strong>
                            </div>
                            <div class="col">
                                <?= GetMessage("BATHS")?>:
                                <strong><?=$arItem["PROPERTIES"]["BATHROOMS"]["VALUE"] ?? '0'?></strong>
                            </div>
                            <div class="col">
                                <?= GetMessage("GARAGES")?>:
                                <strong><?=$arItem["PROPERTIES"]["GARAGE"]["VALUE"] ?? '0'?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

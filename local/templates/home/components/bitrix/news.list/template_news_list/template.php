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



<div class="slide-one-item home-slider owl-carousel">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="site-blocks-cover" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="text">
                <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                    <h2><?=$arItem["NAME"]?></h2>
                <?endif;?>
                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                    <p class="location">
                        <span class="property-icon icon-room"></span> <?=$arItem["PREVIEW_TEXT"]?>
                    </p>
                <?endif;?>
                <?if($arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]):?>
                    <p class="mb-2">
                        <strong><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong>
                    </p>
                <?endif;?>
                <p class="mb-0">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="text-uppercase small letter-spacing-1 font-weight-bold"><?= GetMessage("DETAILS")?></a>
                </p>
            </div>
        </div>
    <?endforeach;?>
</div>

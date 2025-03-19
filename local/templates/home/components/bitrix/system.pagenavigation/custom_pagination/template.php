
<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\Bitrix\Main\UI\Extension::load(['ui.design-tokens']);

$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false)) {
        return;
    }
}


$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>


<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
            <?php if ($arResult["NavPageNomer"] > 1): ?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&laquo;</a>
            <?php endif; ?>

            <?php for ($page = 1; $page <= $arResult["NavPageCount"]; $page++): ?>
                <?php if ($page == $arResult["NavPageNomer"]): ?>
                    <a href="#" class="active"><?=$page?></a>
                <?php else: ?>
                    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$page?>"><?=$page?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&raquo;</a>
            <?php endif; ?>
        </div>
    </div>
</div>

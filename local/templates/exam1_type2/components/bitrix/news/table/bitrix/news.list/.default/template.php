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

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex py-4 px-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th><?=GetMessage("PRODUCT")?></th>
                                <th><?=GetMessage("CATEGORY")?></th>
                                <th><?=GetMessage("CITY")?></th>
                                <th><?=GetMessage("QUANTITY")?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?if($arParams["DISPLAY_TOP_PAGER"]):?>
                                <tr>
                                    <td colspan="5"><?=$arResult["NAV_STRING"]?></td>
                                </tr>
                            <?endif;?>
                            
                            <?foreach($arResult["ITEMS"] as $i => $arItem):?>
                                
                                <tr>
								<td>
									<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
										<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
											<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
										<?else:?>
											<?echo $arItem["NAME"]?>
										<?endif;?>
									<?endif;?>
								</td>
								<td>
									<?if(isset($arItem['DISPLAY_PROPERTIES']['PRODUCT'])):?>
										<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
											<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
												<?=is_array($arItem['DISPLAY_PROPERTIES']['PRODUCT']['DISPLAY_VALUE']) 
													? implode(', ', $arItem['DISPLAY_PROPERTIES']['PRODUCT']['DISPLAY_VALUE'])
													: $arItem['DISPLAY_PROPERTIES']['PRODUCT']['DISPLAY_VALUE']?>
											</a>
										<?else:?>
											<?=is_array($arItem['DISPLAY_PROPERTIES']['PRODUCT']['DISPLAY_VALUE']) 
												? implode(', ', $arItem['DISPLAY_PROPERTIES']['PRODUCT']['DISPLAY_VALUE'])
												: $arItem['DISPLAY_PROPERTIES']['PRODUCT']['DISPLAY_VALUE']?>
										<?endif;?>
									<?endif;?>
								</td>
                                    <td>
                                        
                                        <?=$arItem['DISPLAY_PROPERTIES']['PRODUCT_CATEGORY']['DISPLAY_VALUE'] ?? ''?>
                                    </td>
                                    <td>
                                        
                                        <?=$arItem['DISPLAY_PROPERTIES']['CITY']['DISPLAY_VALUE'] ?? ''?>
                                    </td>
                                    <td>
                                        
                                        <?=$arItem['DISPLAY_PROPERTIES']['QUANTITY']['DISPLAY_VALUE'] ?? ''?>
                                    </td>
                                </tr>
                            <?endforeach;?>
                        </tbody>
                    </table>
                </div>
                
                <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                    <div class="d-flex py-2 px-4 flex-column">
                        <?=$arResult["NAV_STRING"]?>
                    </div>
                <?endif;?>
            </div>
        </div>
    </div>
</div>
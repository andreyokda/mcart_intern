<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<section id="blog-posts" class="blog-posts section">
    <div class="container">
        <div class="row gy-4">
            <div class="search-widget widget-item">
                <form action="" method="get">
                    <?if($arParams["USE_SUGGEST"] === "Y"):
                        if(mb_strlen($arResult["REQUEST"]["~QUERY"]) && is_object($arResult["NAV_RESULT"]))
                        {
                            $arResult["FILTER_MD5"] = $arResult["NAV_RESULT"]->GetFilterMD5();
                            $obSearchSuggest = new CSearchSuggest($arResult["FILTER_MD5"], $arResult["REQUEST"]["~QUERY"]);
                            $obSearchSuggest->SetResultCount($arResult["NAV_RESULT"]->NavRecordCount);
                        }
                        ?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:search.suggest.input",
                            "",
                            array(
                                "NAME" => "q",
                                "VALUE" => $arResult["REQUEST"]["~QUERY"],
                                "INPUT_SIZE" => 40,
                                "DROPDOWN_SIZE" => 10,
                                "FILTER_MD5" => $arResult["FILTER_MD5"],
                            ),
                            $component, array("HIDE_ICONS" => "Y")
                        );?>
                    <?else:?>
                        <input type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />
                    <?endif;?>
                    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    
                    <?if($arParams["SHOW_WHERE"]):?>
                        <select name="where">
                            <option value=""><?=GetMessage("SEARCH_ALL")?></option>
                            <?foreach($arResult["DROPDOWN"] as $key=>$value):?>
                                <option value="<?=$key?>"<?if($arResult["REQUEST"]["WHERE"]==$key) echo " selected"?>><?=$value?></option>
                            <?endforeach?>
                        </select>
                    <?endif;?>
                    <input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />
                </form>
            </div>
        </div>

        <?if(isset($arResult["REQUEST"]["ORIGINAL_QUERY"])):?>
            <div class="search-language-guess">
                <?echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#"=>'<a href="'.$arResult["ORIGINAL_QUERY_URL"].'">'.$arResult["REQUEST"]["ORIGINAL_QUERY"].'</a>'))?>
            </div>
        <?endif;?>

        <?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
        <?elseif($arResult["ERROR_CODE"]!=0):?>
            <div class="alert alert-danger">
                <p><?=GetMessage("SEARCH_ERROR")?></p>
                <?ShowError($arResult["ERROR_TEXT"]);?>
                <p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
            </div>
        <?elseif(count($arResult["SEARCH"])>0):?>
            <?if($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
            
            <div class="row gy-4">
                <?foreach($arResult["SEARCH"] as $arItem):?>
                    <div class="col-lg-4">
                        <article>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?echo $arItem["URL"]?>"><?echo $arItem["TITLE_FORMATED"]?></a></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?=$arItem["DATE_CHANGE"]?></h6>
                                <p class="card-text"><?echo $arItem["BODY_FORMATED"]?></p>
                                                            
                                <?if ($arParams["SHOW_RATING"] == "Y" && $arItem["RATING_TYPE_ID"] <> '' && $arItem["RATING_ENTITY_ID"] > 0):?>
                                    <div class="search-item-rate">
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:rating.vote", $arParams["RATING_TYPE"],
                                            Array(
                                                "ENTITY_TYPE_ID" => $arItem["RATING_TYPE_ID"],
                                                "ENTITY_ID" => $arItem["RATING_ENTITY_ID"],
                                                "OWNER_ID" => $arItem["USER_ID"],
                                                "USER_VOTE" => $arItem["RATING_USER_VOTE_VALUE"],
                                                "USER_HAS_VOTED" => $arItem["RATING_USER_VOTE_VALUE"] == 0? 'N': 'Y',
                                                "TOTAL_VOTES" => $arItem["RATING_TOTAL_VOTES"],
                                                "TOTAL_POSITIVE_VOTES" => $arItem["RATING_TOTAL_POSITIVE_VOTES"],
                                                "TOTAL_NEGATIVE_VOTES" => $arItem["RATING_TOTAL_NEGATIVE_VOTES"],
                                                "TOTAL_VALUE" => $arItem["RATING_TOTAL_VALUE"],
                                                "PATH_TO_USER_PROFILE" => $arParams["~PATH_TO_USER_PROFILE"],
                                            ),
                                            $component,
                                            array("HIDE_ICONS" => "Y")
                                        );?>
                                    </div>
                                <?endif;?>
                            </div>
                        </article>
                    </div><!-- End list item -->
                <?endforeach;?>
            </div>
            
            
        <?else:?>
            <div class="alert alert-info">
                <?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
            </div>
        <?endif;?>
    </div>
</section><!-- /Search Posts Section -->
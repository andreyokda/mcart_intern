<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <div class="col-md-6 col-lg-6">
        <ul class="list-unstyled">
            <?
            $counter = 0;
            $half = ceil(count($arResult) / 2);
            foreach($arResult as $arItem):
            ?>
                <?if ($counter == $half):?>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6">
                    <ul class="list-unstyled">
                <?endif?>
                <li><a href="<?=$arItem["LINK"]?>"<?if ($arItem["SELECTED"]):?> class="active"<?endif?>><?=$arItem["TEXT"]?></a></li>
            <?
            $counter++;
            endforeach;
            ?>
        </ul>
    </div>

<?endif?>
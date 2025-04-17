<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?if (!empty($arResult)):?>

<?php
// Построение дерева меню из плоского массива
$menuTree = [];
$parentItem = null;

foreach ($arResult as $item) {
    if ($item['DEPTH_LEVEL'] == 1) {
        $item['CHILDREN'] = [];
        $menuTree[] = $item;
        $parentItem = &$menuTree[count($menuTree) - 1];
    } elseif ($item['DEPTH_LEVEL'] == 2 && $parentItem) {
        $parentItem['CHILDREN'][] = $item;
        $parentItem['IS_PARENT'] = true;
    }
}
?>

<ul class="sidebar-nav" id="sidebar-nav">
<?foreach ($menuTree as $arItem):?>
    
    <?
    $hasChildren = $arItem["IS_PARENT"] && !empty($arItem['CHILDREN']);
    $isParentSelected = false;
    $parentId = 'nav-'.md5($arItem['LINK']);

    if ($hasChildren) {
        foreach ($arItem['CHILDREN'] as $child) {
            if ($child['SELECTED']) {
                $isParentSelected = true;
                break;
            }
        }
    }
    ?>
    
    <?if($hasChildren):?>
        <li class="nav-item">
            <a class="nav-link<?=($isParentSelected ? '' : ' collapsed')?>" data-bs-target="#<?=$parentId?>" data-bs-toggle="collapse" href="#">
                <i class="bi <?=$arItem["PARAMS"]["menu_ico"]?>"></i>
                <span><?=$arItem["TEXT"]?></span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="<?=$parentId?>" class="nav-content collapse<?=($isParentSelected ? ' show' : '')?>" data-bs-parent="#sidebar-nav">
                <?foreach($arItem["CHILDREN"] as $childItem):?>
                    <li>
                        <a href="<?=$childItem["LINK"]?>"<?if($childItem["SELECTED"]):?> class="active"<?endif?>>
                            <i class="bi bi-circle"></i>
                            <span><?=$childItem["TEXT"]?></span>
                        </a>
                    </li>
                <?endforeach?>
            </ul>
        </li>
    <?else:?>
        <li class="nav-item">
            <a class="nav-link<?if($arItem["SELECTED"]):?> active<?endif?>" href="<?=$arItem["LINK"]?>">
                <i class="bi <?=$arItem["PARAMS"]["menu_ico"]?>"></i>
                <span><?=$arItem["TEXT"]?></span>
            </a>
        </li>
    <?endif?>

<?endforeach?>
</ul>

<?endif?>

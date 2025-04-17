<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */
global $APPLICATION;

if(empty($arResult))
    return "";

$strReturn = '<nav class="breadcrumbs"><ol>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
    // Пропускаем только последний элемент (текущую страницу)
    if($index === $itemSize-1)
        continue;

    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $link = $arResult[$index]["LINK"] ?? '';

    $strReturn .= '<li itemscope itemtype="http://schema.org/ListItem">';
    
    if($link && $index < $itemSize-1) {
        $strReturn .= '<a href="'.$link.'" title="'.$title.'" itemprop="item">';
    }
    
    $strReturn .= '<span itemprop="name">'.$title.'</span>';
    
    if($link && $index < $itemSize-1) {
        $strReturn .= '</a>';
    }
    
    $strReturn .= '<meta itemprop="position" content="'.($index + 1).'" />';
    $strReturn .= '</li>';
}

$strReturn .= '</ol></nav>';

return $strReturn;
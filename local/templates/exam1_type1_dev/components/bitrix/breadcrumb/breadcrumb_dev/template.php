<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

global $APPLICATION;

if (empty($arResult)) {
    return "";
}

$strReturn = '<nav class="breadcrumbs"><ol>';

$itemSize = count($arResult);

// Если в цепочке больше одного элемента, предпоследний пункт — текущий раздел, последний — текущая страница
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    // Все элементы, кроме последнего, выводятся как ссылки
    if ($index < $itemSize - 1) {
        $strReturn .= '
            <li>
                <a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '">' . $title . '</a>
            </li>';
    } else {
        // Последний элемент (текущая страница) без ссылки
        $strReturn .= '
            <li class="current">' . $title . '</li>';
    }
}

$strReturn .= '</ol></nav>';

return $strReturn;
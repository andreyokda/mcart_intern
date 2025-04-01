<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/*
 * Нужно создать пареметры, можно посмотреть как это сделано в компоненте news.list
 * 1. Строка для Название таблицы (TABLE_NAME) Highload-блока. Ниже приведино в качестве примера
 * 2. Количество элементов для постраничной пагинации
 * 3. Кеширования(CACHE_TIME)
 */

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        // пример параметр Название таблицы
        "TABLE_NAME"  =>  Array( // Код поля
            "PARENT" => "BASE", //
            "NAME" => GetMessage("MCART_AGENTS_LIST_TABLE_NAME"), // Название параметра, берется из языкового файла
            "TYPE" => "STRING", // Тип поля
            "DEFAULT" => "", // Значение по дефолту
        ),
        "ITEMS_PER_PAGE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("MCART_AGENTS_LIST_TABLE_NAME_PAG"),
			"TYPE" => "STRING",
			"DEFAULT" => "5",
        ),
        "CACHE_TIME"  =>  Array(
            "DEFAULT"=>36000000,
        ),
    ),
);


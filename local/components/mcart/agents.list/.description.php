<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => GetMessage("AGENTS_LIST"),
	"DESCRIPTION" => GetMessage("AGENTS_LIST_DESC"),
	"ICON" => "/images/news_list.gif",
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "agents",
		"CHILD" => array(
			"ID" => "agents_list",
			"NAME" => GetMessage("AGENTS_LIST_BLOCK"),
			"SORT" => 10,
		),
	),
);

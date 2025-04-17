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
$this->setFrameMode(true);?>

<div class="footer-search">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-6">
				<h4><?=GetMessage("BSF_T_SEARCH_HEAD")?></h4>
					<form action="<?=$arResult["FORM_ACTION"]?>" method="post">
						<div class="search-form">
							<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
									"bitrix:search.suggest.input",
									"",
									array(
										"NAME" => "q",
										"VALUE" => "",
										"INPUT_SIZE" => 15,
										"DROPDOWN_SIZE" => 10,
									),
									$component, array("HIDE_ICONS" => "Y")
								);?><?else:?><input type="text" name="q" value="" size="15" maxlength="50" class="input-seach" /><?endif;?>
							<input class="button-seach" name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON")?>" />
							
						</div>
					</form>
			</div>
		</div>
	</div>
</div>
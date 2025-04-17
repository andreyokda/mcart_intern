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


	

	<!-- Portfolio Sections -->
	<section class="portfolio-sections section">
		<div class="container">
			<div class="row gy-4">

				<? if ($arResult["SECTIONS_COUNT"] > 0): ?>
					<? foreach ($arResult["SECTIONS"] as $arSection): ?>
						<?
						$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
						$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
						$pictureSrc = $arSection["PICTURE"]["SRC"] ?: "/assets/img/placeholder.jpg";
						$pictureAlt = $arSection["PICTURE"]["ALT"] ?: $arSection["NAME"];
						?>
						<div class="col-lg-6" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
							<div class="service-item position-relative">
								<div class="img">
									<img src="<?=htmlspecialcharsbx($pictureSrc)?>" class="img-fluid" alt="<?=htmlspecialcharsbx($pictureAlt)?>">
								</div>
								<div class="details">
									<a href="<?=htmlspecialcharsbx($arSection["SECTION_PAGE_URL"])?>">
										<?=htmlspecialcharsbx($arSection["NAME"])?>
									</a>
									<? if ($arSection['DESCRIPTION']): ?>
										<p><?=htmlspecialcharsbx($arSection["DESCRIPTION"])?></p>
									<? endif; ?>
								</div>
							</div>
						</div>
					<? endforeach; ?>
				<? endif; ?>

			</div>
		</div>
	</section><!-- /Portfolio Sections Section -->



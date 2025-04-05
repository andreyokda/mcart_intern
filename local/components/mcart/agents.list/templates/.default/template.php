<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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

<div class="site-section site-section-sm bg-light">
  <div class="container agents-list">
    <div class="row mb-5">
      <div class="col-12">
        <div class="site-section-title">
          <h2><?= getMessage("ESTATE_AGENT")?></h2>
        </div>
      </div>
    </div>

    
    <?php foreach ($arResult['AGENTS']['ITEMS'] as $arAgent): ?>
      
      <div class="mb-5">
        <div class="agent__card">
          <div class="small-info">

            <div class="avatar" style="background-image: url('<?= ($arAgent['UF_PHOTO'] ? \CFile::GetPath($arAgent['UF_PHOTO']) : '/local/components/mcart/agents.list/templates/.default/images/no-avatar.png') ?>');"></div>
            <div class="info">
              <div class="name"><?= htmlspecialchars($arAgent['UF_LFNAME']) ?></div>
            </div>
          </div>

          <div class="agent__card_item">
            <div class="agent__card_info">
              <div class="card__info_item">
                <div class="position"><?= getMessage("EMAIL")?></div>
                <div class="name"><?= htmlspecialchars($arAgent['UF_EMAIL']) ?></div>
              </div>
              <div class="card__info_item">
                <div class="position"><?= getMessage("PHONE")?></div>
                <div class="name"><?= htmlspecialchars($arAgent['UF_PHONE']) ?></div>
              </div>
              <div class="card__info_item">
                <div class="position"><?= getMessage("TYPE")?></div>
                <div class="name"><?= htmlspecialchars($arAgent['UF_TYPE']) ?></div>
              </div>
            </div>
          </div>

          <a class="star" data-agent-id="<?=$arAgent['ID']?>">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>

      <?$APPLICATION->IncludeComponent(
          "bitrix:main.pagenavigation",
          "custom_pagenavigation",
          [
              "NAV_OBJECT" => $arResult['AGENTS']['NAV_OBJECT'],
		          "SEF_MODE" => "N" 

          ],
          false
      );?>


    
  </div>
</div>






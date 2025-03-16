<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="row">
  <div class="col-md-12 text-center">
    <div class="site-pagination">
      <?php if ($arResult["CURRENT_PAGE"] > 1): ?>
        <a href="<?= $arResult["URL"] ?>?PAGEN_<?= $arResult["ID"] ?>=<?= $arResult["CURRENT_PAGE"] - 1 ?>"><?= GetMessage("PREV") ?></a>
      <?php endif; ?>

      <?php foreach ($arResult["PAGES"] as $page): ?>
        <?php if ($page == $arResult["CURRENT_PAGE"]): ?>
          <a href="#" class="active"><?= $page ?></a>
        <?php elseif ($page == "..."): ?>
          <span>...</span>
        <?php else: ?>
          <a href="<?= $arResult["URL"] ?>?PAGEN_<?= $arResult["ID"] ?>=<?= $page ?>"><?= $page ?></a>
        <?php endif; ?>
      <?php endforeach; ?>

      <?php if ($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]): ?>
        <a href="<?= $arResult["URL"] ?>?PAGEN_<?= $arResult["ID"] ?>=<?= $arResult["CURRENT_PAGE"] + 1 ?>"><?= GetMessage("NEXT") ?></a>
      <?php endif; ?>
    </div>
  </div>  
</div>
<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 mb-5">
        <?php if(!empty($arResult["ERROR_MESSAGE"])): ?>
          <?php foreach($arResult["ERROR_MESSAGE"] as $v): ?>
            <div class="alert alert-danger"><?= $v ?></div>
          <?php endforeach; ?>
        <?php endif; ?>
        
        <?php if(!empty($arResult["OK_MESSAGE"])): ?>
          <div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div>
        <?php endif; ?>

        <form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="p-5 bg-white border">
          <?=bitrix_sessid_post()?>
          
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">
                <?=GetMessage("MFT_NAME")?>
                <?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>
                  <span class="mf-req">*</span>
                <?php endif; ?>
              </label>
              <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" class="form-control" placeholder="<?=GetMessage("MFT_NAME")?>">
            </div>
          </div>
          
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">
                <?=GetMessage("MFT_EMAIL")?>
                <?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?>
                  <span class="mf-req">*</span>
                <?php endif; ?>
              </label>
              <input type="email" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" class="form-control" placeholder="<?=GetMessage("MFT_EMAIL")?>">
            </div>
          </div>
          
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="message">
                <?=GetMessage("MFT_MESSAGE")?>
                <?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])): ?>
                  <span class="mf-req">*</span>
                <?php endif; ?>
              </label>
              <textarea name="MESSAGE" cols="30" rows="5" class="form-control" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=($arResult["MESSAGE"] ?? '')?></textarea>
            </div>
          </div>

          <?php if($arParams["USE_CAPTCHA"] == "Y"): ?>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="captcha_word"><?=GetMessage("MFT_CAPTCHA")?></label>
              <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
              <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA" class="mb-2">
              <input type="text" name="captcha_word" size="30" maxlength="50" value="" class="form-control" placeholder="<?=GetMessage("MFT_CAPTCHA_CODE")?>">
            </div>
          </div>
          <?php endif; ?>
          
          <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
          
          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary py-2 px-4 rounded-0">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-4">
        <div class="p-4 mb-3 bg-white">
          <h3 class="h6 text-black mb-3 text-uppercase"><?=GetMessage("CONTACT_INFO")?></h3>
          <p class="mb-0 font-weight-bold"><?=GetMessage("ADDRESS")?></p>
          <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

          <p class="mb-0 font-weight-bold"><?=GetMessage("PHONE")?></p>
          <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

          <p class="mb-0 font-weight-bold"><?=GetMessage("EMAIL_ADDRESS")?></p>
          <p class="mb-0"><a href="#">youremail@domain.com</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
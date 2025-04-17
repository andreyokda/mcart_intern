<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


?>



<div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          <div class="card mb-3">
            <div class="card-body">
			<?if (!empty($arParams["~AUTH_RESULT"])):?>
             <!--IF AUTH_RESULT-->
             <div class="pt-4 pb-2">
                <p class="small"><?ShowMessage($arParams["~AUTH_RESULT"]);?>
                </p>
             </div>
             <!--END AUTH_RESULT-->
             <?endif?>

<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="row g-3" novalidate>
<?
if ($arResult["BACKURL"] <> '')
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">

	<div class="pt-4 pb-2">
	<p class="small"><?=GetMessage("TEXT1")?><br /><?=GetMessage("TEXT2")?></p>
	</div>

	<div class="col-12">
		<label for="yourUsername" class="form-label"><?=GetMessage("LOGIN")?></label>
		<input id="yourUsername" class="form-control" type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" />
	</div>

	<div class="col-12">
		<label for="yourEmail" class="form-label"><?=GetMessage("EMAIL")?></label>
		<input id="yourEmail" class="form-control" type="text" name="USER_EMAIL" maxlength="255" value="<?=$arResult["USER_EMAIL"]?>" />
	</div>

	<?if($arResult["USE_CAPTCHA"]):?>

<!-- IF USED CAPTCHA -->
<div class="col-12">
 <label class="form-label"><?=GetMessage("CAPTCHA")?>
 </label>
 <div class="input-group has-validation">
	<input required class="form-control" type="text" name="captcha_word" maxlength="50" />
	<div class="invalid-feedback"><?=GetMessage("ERROR_CAPTCHA")?></div>
 </div>
</div>
<div class="col-12">
 <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
 <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
</div>
<!-- END CAPTCHA -->
<?endif?>

	<div class="col-12">
		<button 
			class="btn btn-primary w-100" type="submit" name="send_account_info"><?=GetMessage("SEND")?>
		</button>
	</div>



<div class="col-12">
	<p class="small mb-0">
		<b><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><?=GetMessage("BACK_AUTH")?></a></b>
	</p>
</div>
</form>

<script>
document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
document.bform.USER_LOGIN.focus();
</script>

<?php

use Bitrix\Main\Web\Json;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if($arResult["PHONE_REGISTRATION"])
{
	CJSCore::Init('phone_auth');
}
?>

<div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          <div class="card mb-3">
            <div class="card-body">


<?if($arResult["SHOW_FORM"]):?>

<form class="row g-3 needs-validation" novalidate method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">

	<?if ($arResult["BACKURL"] <> ''): ?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<? endif ?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="CHANGE_PWD">

	<div class="col-12">
			
				<label class="form-label"><?=GetMessage("AUTH_LOGIN")?></label>
				<div class="input-group has-validation">
					<input class="form-control" required type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" />
					<div class="invalid-feedback"><?=GetMessage("FILL_USERNAME")?></div>
				</div>
				</div>
		
<?
	if($arResult["USE_PASSWORD"]):
?>
			<tr>
				<td><span class="starrequired">*</span><?echo GetMessage("sys_auth_changr_pass_current_pass")?></td>
				<td><input type="password" name="USER_CURRENT_PASSWORD" maxlength="255" value="<?=$arResult["USER_CURRENT_PASSWORD"]?>" class="bx-auth-input" autocomplete="new-password" /></td>
			</tr>
<?
	else:
?>
			<div class="col-12">
				<label class="form-label"><?=GetMessage("AUTH_CHECKWORD")?></label>
				<div class="input-group has-validation">
				<input class="form-control" required type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" />
				<div class="invalid-feedback"><?=GetMessage("FILL_CONTROL_LINE")?></div>
				</div>
			</div>
<?
	endif
?>
<?endif?>
				<div class="col-12">
					<label class="form-label"><?=GetMessage("AUTH_NEW_PASSWORD_REQ")?></label>

					<div class="input-group has-validation">
					<input class="form-control" required type="password" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"]?>" />
					<?if($arResult["SECURE_AUTH"]):?>
									<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
										<div class="bx-auth-secure-icon"></div>
									</span>
									<noscript>
									<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
										<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
									</span>
									</noscript>
									<script>
									document.getElementById('bx_auth_secure').style.display = 'inline-block';
									</script>
					<?endif?>
					<div class="invalid-feedback"><?=GetMessage("FILL_NEW_PASSWORD")?></div>
				</div>
			</div>

			<div class="col-12">
				<label class="form-label"><?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?></label>
				<div class="input-group has-validation">
				<input class="form-control" type="password" required name="USER_CONFIRM_PASSWORD" maxlength="255" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>"/>
				<div class="invalid-feedback"><?=GetMessage("FILL_PASSWORD_CONFIRMATION")?></div>
				</div>
			</div>


		<div class="col-12">
			<button class="btn btn-primary w-100" type="submit" name="change_pwd" value="Изменить пароль"><?=GetMessage("AUTH_CHANGE")?></button>
		</div>







	<div class="col-12">
		<p class="small"><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>  <!-- GROUP_POLICY / PASSWORD_REQUIREMENTS-->
	</div>
	</form>



<div id="bx_chpass_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_chpass_resend"></div>

<div class="field">
	<p class="small"><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>  <!-- AUTH_URL -->
</div>

</div>

</div>

</div>
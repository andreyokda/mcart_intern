<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="card mb-3">
            <div class="card-body">
                <div class="pt-4 pb-2">
                    <p class="text-center small"><?=GetMessage("AUTH_PLEASE_AUTH")?></p>
                </div>

                <form 
                    class="row g-3 needs-validation" novalidate
                    name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>"
                >
                    <input type="hidden" name="AUTH_FORM" value="Y" />
                    <input type="hidden" name="TYPE" value="AUTH" />
                    <?if ($arResult["BACKURL"] <> ''):?>
                        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                    <?endif?>
                    <?foreach ($arResult["POST"] as $key => $value):?>
                        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                    <?endforeach?>

                    <div class="col-12">
                        <label for="yourUsername" class="form-label"><?=GetMessage("AUTH_LOGIN")?></label>
                        <div class="input-group has-validation">
                            <input
                                type="text" class="form-control" id="yourUsername" required
                                name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"]?>"
                            >
                            <div class="invalid-feedback"><?=GetMessage("AUTH_LOGIN_NOTE")?></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label"><?=GetMessage("AUTH_PASSWORD")?></label>
                        <input 
                            class="form-control" id="yourPassword" required
                            type="password" name="USER_PASSWORD" maxlength="255" autocomplete="off" 
                        >
                        <div class="invalid-feedback"><?=GetMessage("AUTH_PASSWORD_NOTE")?></div>
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
                    </div>

                    <?if($arResult["CAPTCHA_CODE"]):?>
                        <div class="col-12">
                            <label class="form-label"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?></label>
                            <div class="input-group has-validation">
                                <input required class="form-control" type="text" name="captcha_word" maxlength="50" />
                                <div class="invalid-feedback"><?echo GetMessage("AUTH_CAPTCHA_NOTE")?></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
                        </div>
                    <?endif?>

                    <?if ($arResult["STORE_PASSWORD"] == "Y"):?>
                        <div class="col-12">
                            <div class="form-check">
                                <input 
                                    class="form-check-input"
                                    type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y"
                                >
                                <label class="form-check-label" for="USER_REMEMBER"><?=GetMessage("AUTH_REMEMBER_ME")?></label>
                            </div>
                        </div>
                    <?endif?>

                    <div class="col-12">
                        <button 
                            class="btn btn-primary w-100" type="submit" name="Login"
                        ><?=GetMessage("AUTH_AUTHORIZE")?></button>
                    </div>

                    <?if ($arParams["NOT_SHOW_LINKS"] != "Y"):?>
                        <noindex>
                            <div class="col-12">
                                <p class="small mb-0"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></p>
								<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow">
                                <?=GetMessage("RECOVER")?>
                                </a>
                            </div>
                        </noindex>
                    <?endif?>

                    
                </form>
            </div>
        </div>
    </div>
</div>

<script>
<?if ($arResult["LAST_LOGIN"] <> ''):?>
try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
<?else:?>
try{document.form_auth.USER_LOGIN.focus();}catch(e){}
<?endif?>
</script>
<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2024 Bitrix
 */

use Bitrix\Main\Web\Json;

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if ($arResult["SHOW_SMS_FIELD"] == true) {
    CJSCore::Init('phone_auth');
}
?>

<div class="col-md-12 col-lg-8 mb-5">
    <?php if ($USER->IsAuthorized()): ?>
        <p><?php echo GetMessage("MAIN_REGISTER_AUTH"); ?></p>
    <?php else: ?>
        <?php if (!empty($arResult["ERRORS"])):
            ShowError(implode("<br />", $arResult["ERRORS"]));
        elseif ($arResult["USE_EMAIL_CONFIRMATION"] === "Y"): ?>
            <p><?php echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT"); ?></p>
        <?php endif; ?>

        <form class="p-5 bg-white border" method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
            <?php if ($arResult["BACKURL"] !== ''): ?>
                <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
            <?php endif; ?>

			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<b><?=GetMessage("AUTH_REGISTER")?></b>
				</div>
			</div>

            <?php foreach ($arResult["SHOW_FIELDS"] as $FIELD): ?>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold">
                            <?= GetMessage("REGISTER_FIELD_" . $FIELD) ?>
                            <?php if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"): ?><span class="starrequired">*</span><?php endif; ?>
                        </label>
                        <?php switch ($FIELD):
                            case "PASSWORD": ?>
                                <input type="password" name="REGISTER[<?=$FIELD?>]" class="form-control" autocomplete="off" />
                            <?php break;
                            case "CONFIRM_PASSWORD": ?>
                                <input type="password" name="REGISTER[<?=$FIELD?>]" class="form-control" autocomplete="off" />
                            <?php break;
                            case "PERSONAL_GENDER": ?>
                                <select name="REGISTER[<?=$FIELD?>]" class="form-control">
                                    <option value=""><?= GetMessage("USER_DONT_KNOW") ?></option>
                                    <option value="M"<?= ($arResult["VALUES"][$FIELD] == "M") ? " selected" : "" ?>><?= GetMessage("USER_MALE") ?></option>
                                    <option value="F"<?= ($arResult["VALUES"][$FIELD] == "F") ? " selected" : "" ?>><?= GetMessage("USER_FEMALE") ?></option>
                                </select>
                            <?php break;
                            default: ?>
                                <input type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" class="form-control" />
                        <?php endswitch; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if ($arResult["USE_CAPTCHA"] == "Y"): ?>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold"><?= GetMessage("REGISTER_CAPTCHA_TITLE") ?></label>
                        <div>
                            <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
                        </div>
                        <input type="text" name="captcha_word" class="form-control mt-2" autocomplete="off" />
                    </div>
                </div>
            <?php endif; ?>

			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<label class="font-weight-bold"><?=GetMessage("REGISTER_FIELD_UF_USER")?></label>
					<div>
						<label><input type="radio" name="UF_USER" value="15" <?=($arResult["VALUES"]["UF_USER"] == "15") ? "checked" : "";?>> Покупатель</label>
						<label><input type="radio" name="UF_USER" value="14" <?=($arResult["VALUES"]["UF_USER"] == "14") ? "checked" : "";?>> Продавец</label>
					</div>
				</div>
			</div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" name="register_submit_button" class="btn btn-primary py-2 px-4 rounded-0" value="<?= GetMessage("AUTH_REGISTER") ?>" />
                </div>
            </div>
        </form>

        <p><span class="starrequired">*</span><?= GetMessage("AUTH_REQ") ?></p>
    <?php endif; ?>
</div>

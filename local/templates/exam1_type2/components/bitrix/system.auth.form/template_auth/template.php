<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();

global $USER;

?>

<nav class="header-nav ms-auto">
<?
if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
{
    ShowMessage($arResult['ERROR_MESSAGE']);
}

// Выводим содержимое только для авторизованных пользователей
if ($USER->IsAuthorized()):
?>

<?if($arResult["FORM_TYPE"] == "login"):?>
    <!-- Этот блок теперь не будет выводиться для неавторизованных -->
<?elseif($arResult["FORM_TYPE"] == "otp"):?>
    <!-- Форма OTP -->
    <div id="header-auth-form">
        <form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
            <!-- ... существующая форма OTP ... -->
        </form>
    </div>
<?else:?>
    <!-- Профиль пользователя -->
    <div id="header-user-profile">
        <ul class="d-flex align-items-center">
            <form action="<?=$arResult["AUTH_URL"]?>" id="logout-form">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?=$arResult["USER_NAME"]?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?=$arResult["USER_NAME"]?></h6>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?=$arResult["PROFILE_URL"]?>">
                                <i class="bi bi-person"></i>
                                <span><?=GetMessage("AUTH_PROFILE")?></span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <div class="col-12 mb-3 mt-3 d-flex justify-content-center">
                                <?foreach ($arResult["GET"] as $key => $value):?>
                                    <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                                <?endforeach?>
                                <?=bitrix_sessid_post()?>
                                <input type="hidden" name="logout" value="yes" />
                                <button 
                                    class="btn btn-secondary btn-sm"
                                    type="submit"
                                    name="logout_butt"
                                    value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>"   
                                >
                                    <?=GetMessage("AUTH_LOGOUT_BUTTON")?>
                                </button>
                            </div>
                        </li>
                    </ul>
                </li>
            </form>
        </ul>
    </div>
<?endif;?>

<?endif; // Конец проверки IsAuthorized() ?>
</nav>
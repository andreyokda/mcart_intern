<?php

use Bitrix\Main\Loader;
use Bitrix\Main\EventManager;
use Bitrix\Main\UserTable;
use Bitrix\Main\GroupTable;

Loader::includeModule("main");

class UserRegistrationHandler
{
    public static function onAfterUserAdd(&$arFields)
    {
        if (intval($arFields["ID"]) > 0) {
            $userId = intval($arFields["ID"]);

            $user = UserTable::getList([
                'select' => ['UF_USER'],
                'filter' => ['ID' => $userId]
            ])->fetch();

            if ($user && isset($user["UF_USER"])) {
                $groupId = null;

                if ($user["UF_USER"] === "14") {
                    $groupId = 7; 
                } elseif ($user["UF_USER"] === "15") {
                    $groupId = 6; 
                }

                if ($groupId) {

                    \CUser::SetUserGroup($userId, array_merge(\CUser::GetUserGroup($userId), [$groupId]));
                }
            }
        }
    }
}


EventManager::getInstance()->addEventHandler("main", "OnAfterUserAdd", ["UserRegistrationHandler", "onAfterUserAdd"]);

?>

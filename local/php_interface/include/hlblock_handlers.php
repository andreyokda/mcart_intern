<?php

use Bitrix\Main\Application;

class HlBlockCacheHandlers
{
    public static function clearCacheOnChange(\Bitrix\Main\Event $event)
    {
        $entity = $event->getParameter('entity');
        $tableName = $entity->getDataClass()::getTableName();
        
        $taggedCache = Application::getInstance()->getTaggedCache();
        $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
        
        if ($id = $event->getParameter('id')['ID'] ?? null) {
            $taggedCache->clearByTag('hlblock_item_' . $tableName . '_' . $id);
        }

         if ($event->getEventType() === 'OnAfterUpdate') {
            $fields = $event->getParameter('fields');
            $oldFields = $event->getParameter('oldFields');
            
            $filterFields = ['UF_ACTIVE', 'UF_TYPE'];
            
            foreach ($filterFields as $field) {
                if (isset($fields[$field]) && $fields[$field] != ($oldFields[$field] ?? null)) {
                    // Специальный тег для сброса кеша при изменении фильтрационных полей
                    $taggedCache->clearByTag('hlblock_filter_' . $tableName);
                    break;
                }
            }
        }
    }
}

AddEventHandler('highloadblock', 'OnAfterAdd', ['HlBlockCacheHandlers', 'clearCacheOnChange']);
AddEventHandler('highloadblock', 'OnAfterUpdate', ['HlBlockCacheHandlers', 'clearCacheOnChange']);
AddEventHandler('highloadblock', 'OnAfterDelete', ['HlBlockCacheHandlers', 'clearCacheOnChange']);
AddEventHandler('highloadblock', 'OnAfterSetMultipleValues', ['HlBlockCacheHandlers', 'clearCacheOnChange']);
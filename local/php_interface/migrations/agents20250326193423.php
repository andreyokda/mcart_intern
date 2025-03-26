<?php

namespace Sprint\Migration;


class agents20250326193423 extends Version
{
    protected $author = "admin";

    protected $description = "";

    protected $moduleVersion = "4.18.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array (
            'NAME' => 'Agents',
            'TABLE_NAME' => 'agents_bd',
        ));
        
        $helper->Hlblock()->saveField($hlblockId, array (
            'FIELD_NAME' => 'UF_LFNAME',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => '',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'Y',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' => 
            array (
                'SIZE' => 20,
                'ROWS' => 1,
                'REGEXP' => '',
                'MIN_LENGTH' => 0,
                'MAX_LENGTH' => 0,
                'DEFAULT_VALUE' => '',
            ),
            'EDIT_FORM_LABEL' => 
            array (
                'en' => 'Last Name First Name',
                'ru' => 'Фамилия Имя Отчество',
            ),
            'LIST_COLUMN_LABEL' => 
            array (
                'en' => 'Last Name First Name',
                'ru' => 'Фамилия Имя Отчество',
            ),
            'LIST_FILTER_LABEL' => 
            array (
                'en' => 'Last Name First Name',
                'ru' => 'Фамилия Имя Отчество',
            ),
            'ERROR_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
            'HELP_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
        ));
        
        $helper->Hlblock()->saveField($hlblockId, array (
            'FIELD_NAME' => 'UF_ACTIVE',
            'USER_TYPE_ID' => 'boolean',
            'XML_ID' => '',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'N',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' => 
            array (
                'DEFAULT_VALUE' => 1,
                'DISPLAY' => 'DROPDOWN',
                'LABEL' => 
                array (
                    0 => '',
                    1 => '',
                ),
                'LABEL_CHECKBOX' => '',
            ),
            'EDIT_FORM_LABEL' => 
            array (
                'en' => 'Active',
                'ru' => 'Активность',
            ),
            'LIST_COLUMN_LABEL' => 
            array (
                'en' => 'Active',
                'ru' => 'Активность',
            ),
            'LIST_FILTER_LABEL' => 
            array (
                'en' => 'Active',
                'ru' => 'Активность',
            ),
            'ERROR_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
            'HELP_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
        ));
        
        $helper->Hlblock()->saveField($hlblockId, array (
            'FIELD_NAME' => 'UF_EMAIL',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => '',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'Y',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' => 
            array (
                'SIZE' => 20,
                'ROWS' => 1,
                'REGEXP' => '',
                'MIN_LENGTH' => 0,
                'MAX_LENGTH' => 0,
                'DEFAULT_VALUE' => '',
            ),
            'EDIT_FORM_LABEL' => 
            array (
                'en' => 'Email',
                'ru' => 'Почта',
            ),
            'LIST_COLUMN_LABEL' => 
            array (
                'en' => 'Email',
                'ru' => 'Почта',
            ),
            'LIST_FILTER_LABEL' => 
            array (
                'en' => 'Email',
                'ru' => 'Почта',
            ),
            'ERROR_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
            'HELP_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
        ));
        
        $helper->Hlblock()->saveField($hlblockId, array (
            'FIELD_NAME' => 'UF_PHONE',
            'USER_TYPE_ID' => 'string',
            'XML_ID' => '',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'Y',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' => 
            array (
                'SIZE' => 20,
                'ROWS' => 1,
                'REGEXP' => '',
                'MIN_LENGTH' => 0,
                'MAX_LENGTH' => 0,
                'DEFAULT_VALUE' => '',
            ),
            'EDIT_FORM_LABEL' => 
            array (
                'en' => 'Number',
                'ru' => 'Телефон',
            ),
            'LIST_COLUMN_LABEL' => 
            array (
                'en' => 'Number',
                'ru' => 'Телефон',
            ),
            'LIST_FILTER_LABEL' => 
            array (
                'en' => 'Number',
                'ru' => 'Телефон',
            ),
            'ERROR_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
            'HELP_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
        ));
        
        $helper->Hlblock()->saveField($hlblockId, array (
            'FIELD_NAME' => 'UF_TYPE',
            'USER_TYPE_ID' => 'enumeration',
            'XML_ID' => '',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'Y',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' => 
            array (
                'DISPLAY' => 'LIST',
                'LIST_HEIGHT' => 4,
                'CAPTION_NO_VALUE' => '',
                'SHOW_NO_VALUE' => 'N',
            ),
            'EDIT_FORM_LABEL' => 
            array (
                'en' => 'Type of activity',
                'ru' => 'Вид деятельности',
            ),
            'LIST_COLUMN_LABEL' => 
            array (
                'en' => 'Type of activity',
                'ru' => 'Вид деятельности',
            ),
            'LIST_FILTER_LABEL' => 
            array (
                'en' => 'Type of activity',
                'ru' => 'Вид деятельности',
            ),
            'ERROR_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
            'HELP_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
            'ENUM_VALUES' => 
            array (
                0 => 
                array (
                    'VALUE' => 'Брокер',
                    'DEF' => 'N',
                    'SORT' => '500',
                    'XML_ID' => 'TYPE1',
                ),
                1 => 
                array (
                    'VALUE' => 'Агент по продаже',
                    'DEF' => 'N',
                    'SORT' => '500',
                    'XML_ID' => 'TYPE2',
                ),
                2 => 
                array (
                    'VALUE' => 'Агент по покупке',
                    'DEF' => 'N',
                    'SORT' => '500',
                    'XML_ID' => 'TYPE3',
                ),
                3 => 
                array (
                    'VALUE' => 'Риэлтор',
                    'DEF' => 'N',
                    'SORT' => '500',
                    'XML_ID' => 'TYPE4',
                ),
            ),
        ));
        
        $helper->Hlblock()->saveField($hlblockId, array (
            'FIELD_NAME' => 'UF_PHOTO',
            'USER_TYPE_ID' => 'file',
            'XML_ID' => '',
            'SORT' => '100',
            'MULTIPLE' => 'N',
            'MANDATORY' => 'Y',
            'SHOW_FILTER' => 'N',
            'SHOW_IN_LIST' => 'Y',
            'EDIT_IN_LIST' => 'Y',
            'IS_SEARCHABLE' => 'N',
            'SETTINGS' => 
            array (
                'SIZE' => 20,
                'LIST_WIDTH' => 0,
                'LIST_HEIGHT' => 0,
                'MAX_SHOW_SIZE' => 0,
                'MAX_ALLOWED_SIZE' => 0,
                'EXTENSIONS' => 
                array (
                ),
                'TARGET_BLANK' => 'Y',
            ),
            'EDIT_FORM_LABEL' => 
            array (
                'en' => 'Photo',
                'ru' => 'Фото',
            ),
            'LIST_COLUMN_LABEL' => 
            array (
                'en' => 'Photo',
                'ru' => 'Фото',
            ),
            'LIST_FILTER_LABEL' => 
            array (
                'en' => 'Photo',
                'ru' => 'Фото',
            ),
            'ERROR_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
            'HELP_MESSAGE' => 
            array (
                'en' => '',
                'ru' => '',
            ),
        ));
    }

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function down()
    {
        $helper = $this->getHelperManager();
        
        if ($helper->Hlblock()->deleteHlblockIfExists('Agents')) {
            $this->outSuccess('Highload-блок "Agents" удален');
        } else {
            $this->outError('Highload-блок "Agents" не найден или не удален');
        }
    }
}
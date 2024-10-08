<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'delete' => 'deleted',
        'iconfile' => 'EXT:popup_power/Resources/Public/Icons/Extension.gif',
        'origUid' => 't3_origuid',
        'hideTable' => true,
    ],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_name',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'required' => true,
                'max' => 256,
                'default' => 'Default',
            ],
        ],
        'extend_to_subpages' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_extend_to_subpages',
            'config' => [
                'type' => 'check',
            ],
        ],
        'layout' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_layout',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 'modal',
                'items' => [
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:module_dashboard_form_layout_prependLabel',
                        'value' => '',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_layout_I_0',
                        'value' => 'modal',
                    ],
                ],
            ],
        ],
        'position' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_position',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 'center',
                'items' => [
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:module_dashboard_form_position_prependLabel',
                        'value' => '',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_position_I_0',
                        'value' => 'center',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_position_I_1',
                        'value' => 'center-left',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_position_I_2',
                        'value' => 'center-right',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_position_I_3',
                        'value' => 'bottom-left',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_position_I_4',
                        'value' => 'bottom-center',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_position_I_5',
                        'value' => 'bottom-right',
                    ],
                ],
            ],
        ],
        'behaviour_appearance' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_behaviour_appearance',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 'once',
                'items' => [
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:module_dashboard_form_behaviour_appearance_prependLabel',
                        'value' => '',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_behaviour_appearance_I_0',
                        'value' => 'once',
                    ],
                    [
                        'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_behaviour_appearance_I_1',
                        'value' => 'always',
                    ],
                ],
            ],
        ],
        'popup_content' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_popup_content',
            'config' => [
                'type' => 'group',
                'allowed' => 'pages',
                'maxitems' => 1,
                'minitems' => 1,
                'size' => 1,
                'suggestOptions' => [
                    'default' => [
                        'addWhere' => 'AND pages.doktype = ' . \Slavlee\PopupPower\Registry\PopupRegistry::PAGETYPES_POPUP_CONTENT,
                    ],
                ],
            ],
        ],
        'delay' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_delay',
            'description' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_delay_description',
            'config' => [
                'type' => 'input',
            ],
        ],
        't3ver_label' => [
            'displayCond' => 'FIELD:t3ver_label:REQ:true',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'none',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
    ],
    'types' => [
        0 => ['showitem' => 'hidden, name, extend_to_subpages, layout, position, behaviour_appearance, delay, popup_content'],
    ],
];

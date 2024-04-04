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
        'override' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_override',
            'config' => [
                'type' => 'check',
            ],
        ],
        'is_root' => [
            'label' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_configuration_is_root',
            'config' => [
                'type' => 'check',
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
        0 => ['showitem' => 'hidden, name'],
    ],
];

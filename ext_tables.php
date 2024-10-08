<?php

defined('TYPO3') || die();

call_user_func(function () {

    $GLOBALS['PAGES_TYPES'][\Slavlee\PopupPower\Registry\PopupRegistry::PAGETYPES_POPUP_CONTENT] = [
        'type' => 'web',
        'allowedTables' => '*',
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
        options.pageTree.doktypesToShowInNewPageDragArea := addToList(' . \Slavlee\PopupPower\Registry\PopupRegistry::PAGETYPES_POPUP_CONTENT . ')
    ');


    if (TYPO3_MODE === 'BE') {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'PopupPower',
            'web',
            'web_popuppower_dashboard',
            '',
            [
                \Slavlee\PopupPower\Controller\Backend\DashboardController::class => 'show, save',
            ],
            [
                'labels' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_mod_web_popuppower.xlf',
                'icon' => 'EXT:popup_power/Resources/Public/Icons/Extension.svg',
                'access' => 'user',
            ]
        );

    }


});

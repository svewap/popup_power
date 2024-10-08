<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule(
    $GLOBALS['TCA']['pages'],
    [
        'types' => [
            (string)\Slavlee\PopupPower\Registry\PopupRegistry::PAGETYPES_POPUP_CONTENT => $GLOBALS['TCA']['pages']['types'][\TYPO3\CMS\Core\Domain\Repository\PageRepository::DOKTYPE_DEFAULT],
        ],
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'pages',
    'doktype',
    [
        'Popup Power',
        (string) \Slavlee\PopupPower\Registry\PopupRegistry::PAGETYPES_POPUP_CONTENT,
        'pagetype-popup-content',
    ],
    '1',
    'after'
);

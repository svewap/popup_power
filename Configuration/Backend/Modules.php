<?php

declare(strict_types=1);

return [
    'web_popuppower_dashboard' => [
        'parent' => 'web',
        'position' => 'bottom',
        'access' => 'user,group',
        'path' => '/module/web/popuppower/dashboard',
        'iconIdentifier' => 'web-popuppower-dashboard',
        'labels' => 'LLL:EXT:popup_power/Resources/Private/Language/locallang_mod_web_popuppower.xlf',
        'extensionName' => 'PopupPower',
        'controllerActions' => [
            \Slavlee\PopupPower\Controller\Backend\DashboardController::class => [
                'show',
                'save'
            ],
        ],
    ],
];

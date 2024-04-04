<?php

declare(strict_types=1);

return [
    'web_popuppower_dashboard_remove' => [
        'path' => '/module/web/popuppower/dashboard/remove',
        'target' => \Slavlee\PopupPower\Controller\Backend\DashboardController::class . '::removeConfiguration',
    ],
];

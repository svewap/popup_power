<?php

declare(strict_types=1);

return [
    \Slavlee\PopupPower\Domain\Model\PopupContent::class => [
        'tableName' => 'pages',
        'recordType' => \Slavlee\PopupPower\Registry\PopupRegistry::PAGETYPES_POPUP_CONTENT,
    ],
];

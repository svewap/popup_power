<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 extension: popup_power.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Slavlee\PopupPower\Bootstrap;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\DataHandling\PageDoktypeRegistry;
use Slavlee\PopupPower\Registry\PopupRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class ExtTables extends Base
{
    /**
     * Does the main class purpose
     */
    public function invoke(): void
    {
        $this->addPageTypes();
    }

    /**
     * Add all page types
     */
    private function addPageTypes(): void
    {
        $dokTypeRegistry = GeneralUtility::makeInstance(PageDoktypeRegistry::class);
        $dokTypeRegistry->add(
            PopupRegistry::PAGETYPES_POPUP_CONTENT,
            [
                'type' => 'web',
                'allowedTables' => '*',
            ],
        );

        ExtensionManagementUtility::addUserTSConfig(
            'options.pageTree.doktypesToShowInNewPageDragArea := addToList(' . PopupRegistry::PAGETYPES_POPUP_CONTENT . ')'
        );
    }
}

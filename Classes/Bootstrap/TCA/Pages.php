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

namespace Slavlee\PopupPower\Bootstrap\TCA;

use Slavlee\PopupPower\Bootstrap\Base;
use Slavlee\PopupPower\Registry\PopupRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class Pages extends Base
{
    /**
     * Does the main class purpose
     */
    public function invoke(): void
    {
        $this->addPageTypes();
    }

    /**
     * addPageTypes
     */
    private function addPageTypes(): void
    {
        // Add the new doktype to the page type selector
        ExtensionManagementUtility::addTcaSelectItem(
            'pages',
            'doktype',
            [
                'label' => 'LLL:EXT:' . $this->extensionKey . '/Resources/Private/Language/locallang_db.xlf:tx_popuppower_domain_model_popup_content',
                'value' => PopupRegistry::PAGETYPES_POPUP_CONTENT,
                'icon'  => 'pagetype-popup-content',
                'group' => 'special',
            ],
        );
        // Add the icon to the icon class configuration
        $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes'][PopupRegistry::PAGETYPES_POPUP_CONTENT] = 'pagetype-popup-content';
    }
}

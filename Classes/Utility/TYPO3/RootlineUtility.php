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

namespace Slavlee\PopupPower\Utility\TYPO3;

use TYPO3\CMS\Core\Utility\GeneralUtility;

class RootlineUtility
{
    /**
     * Return page ids of the rootline
     * starting at given page id
     * @param int $pageId
     * @return array
     */
    public static function getPageIds(int $pageId): array
    {
        $pageIds = [];
        $rootlineUtility = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Utility\RootlineUtility::class, $pageId);
        $pageRecords = $rootlineUtility->get();

        foreach($pageRecords as $pageRecord) {
            $pageIds[] = $pageRecord['uid'];
        }

        return $pageIds;
    }
}

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

use TYPO3\CMS\Extbase\Persistence\Repository;

class RepositoryUtility
{
    /**
     * Disable respect storage page of given repostiroy
     * @param Repository $repository
     */
    public static function disableRespectStoragePage(Repository &$repository): void
    {
        $querySettings = $repository->createQuery()->getQuerySettings();
        $querySettings->setRespectStoragePage(false);
        $repository->setDefaultQuerySettings($querySettings);
    }

    /**
     * Set enabledFieldsToIgnore
     * @param Repository $repository
     * @param array $enabledFieldsToIgnore
     */
    public static function ignoreEnabledFields(Repository &$repository, array $enabledFieldsToIgnore): void
    {
        $querySettings = $repository->createQuery()->getQuerySettings();
        $querySettings->setEnableFieldsToBeIgnored($enabledFieldsToIgnore);
        $querySettings->setIgnoreEnableFields(true);
        $repository->setDefaultQuerySettings($querySettings);
    }
}

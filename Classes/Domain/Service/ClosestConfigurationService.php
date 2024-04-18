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

namespace Slavlee\PopupPower\Domain\Service;

use Slavlee\PopupPower\Domain\Model\Configuration;
use Slavlee\PopupPower\Domain\Repository\ConfigurationRepository;
use Slavlee\PopupPower\Utility\TYPO3\RootlineUtility;

class ClosestConfigurationService
{
    public function __construct(
        private readonly ConfigurationRepository $configurationRepository
    ) {}

    /**
     * Return the closest configuration
     * starting from given page id
     * @param int $startPageId
     * @return Configuration
     */
    public function get(int $startPageId): ?Configuration
    {
        // check if current page has a configuration
        // if so, then priorize it
        $configurationOfCurrentPage = $this->configurationRepository->findByPid($startPageId)->current();

        if ($configurationOfCurrentPage) {
            return $configurationOfCurrentPage;
        }

        $rootlineIds = RootlineUtility::getPageIds($startPageId);
        $configurationClosest = $this->configurationRepository->findByRootline($rootlineIds)->current();

        return $configurationClosest ? $configurationClosest : null;
    }
}

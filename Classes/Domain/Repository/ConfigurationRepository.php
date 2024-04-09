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

namespace Slavlee\PopupPower\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class ConfigurationRepository extends Repository
{
    /**
     * Find configuration by pid
     * @param int $pid
     * @return QueryResult
     */
    public function findByPid(int $pid): QueryResult
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->matching(
            $query->logicalAnd(
                $query->equals('pid', $pid),
            )
        );

        return $query->execute();
    }

    /**
     * Find first configuration in the rootline
     * @param array $rootlineIds
     * @return QueryResult
     */
    public function findByRootline(array $rootlineIds): QueryResult
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->matching(
            $query->logicalAnd(
                $query->in('pid', $rootlineIds),
                $query->equals('extendToSubpages', true)
            )
        );
        $query->setOrderings(['uid' => QueryInterface::ORDER_DESCENDING]);

        return $query->execute();
    }

    /**
     * Execute the persistenceManager->persistAll
     */
    public function persistAll()
    {
        $this->persistenceManager->persistAll();
    }
}

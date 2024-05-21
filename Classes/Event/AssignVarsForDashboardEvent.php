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

namespace Slavlee\PopupPower\Event;
use Slavlee\PopupPower\Domain\Model\Configuration;

final class AssignVarsForDashboardEvent
{
    /**
     * @var Configuration
     */
    private Configuration $configuration;

    /**
     * @var array
     */
    private array $fluidVars = [];

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getFluidVars(): array
    {
        return $this->fluidVars;
    }

    public function setFluidVars(array $fluidVars): void
    {
        $this->fluidVars = $fluidVars;
    }

    /**
     * Get the value of configuration
     *
     * @return  Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    /**
     * Set the value of configuration
     *
     * @param  Configuration  $configuration
     *
     * @return  self
     */
    public function setConfiguration(Configuration $configuration): AssignVarsForDashboardEvent
    {
        $this->configuration = $configuration;

        return $this;
    }
}

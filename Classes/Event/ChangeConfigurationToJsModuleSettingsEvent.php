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

final class ChangeConfigurationToJsModuleSettingsEvent
{
    /**
     * @var array
     */
    private array $settings = [];

    /**
     * @var Configuration
     */
    private Configuration $configuration;

    public function __construct(array $settings, Configuration $configuration)
    {
        $this->settings = $settings;
        $this->configuration = $configuration;
    }

    /**
     * Get the value of settings
     * @return array
     */
    public function getSettings(): array
    {
        return $this->settings;
    }

    /**
     * Set the value of settings
     *
     * @return  self
     */
    public function setSettings(array $settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Add a setting into the $this->settings array
     * @param string $name
     * @param mixed $value
     */
    public function addSettings(string $name, $value)
    {
        $this->settings[$name] = $value;
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
    public function setConfiguration(Configuration $configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }
}

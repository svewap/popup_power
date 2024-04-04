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

namespace Slavlee\PopupPower\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Configuration extends AbstractEntity
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $extendToSubpages = false;

    /**
     * @var bool
     */
    protected bool $hidden = false;

    /**
     * Get the value of extendToSubpages
     *
     * @return  bool
     */
    public function getExtendToSubpages()
    {
        return $this->extendToSubpages;
    }

    /**
     * Set the value of extendToSubpages
     *
     * @param  bool  $extendToSubpages
     *
     * @return  self
     */
    public function setExtendToSubpages(bool $extendToSubpages)
    {
        $this->extendToSubpages = $extendToSubpages;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of hidden
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set the value of hidden
     *
     * @return  self
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Create a new Configuration object with
     * the same values except TYPO3 core fields
     * @return Configuration
     */
    public function clone(): Configuration
    {
        $configuration = new Configuration();
        $vars = get_object_vars($this);
        $propertiesToIgnore = ['uid', 'pid', '_localizedUid', '_languageUid', '_versionedUid', 'override', 'isRoot'];

        foreach($vars as $propertyName => $value) {
            if (\in_array($propertyName, $propertiesToIgnore)) {
                continue;
            }
            $func = 'set' . \ucfirst($propertyName);

            $configuration->$func($value);
        }

        return $configuration;
    }
}

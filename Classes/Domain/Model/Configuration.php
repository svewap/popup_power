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
     * @var string
     */
    protected string $layout = 'modal';

    /**
     * @var string
     */
    protected string $position = 'center';

    /**
     * @var string
     */
    protected string $behaviourAppearance = 'once';

    /**
     * @var bool
     */
    protected bool $extendToSubpages = false;

    /**
     * @var bool
     */
    protected bool $hidden = false;

    protected PopupContent $popupContent;

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

        foreach ($vars as $propertyName => $value) {
            if (\in_array($propertyName, $propertiesToIgnore)) {
                continue;
            }
            $func = 'set' . \ucfirst($propertyName);

            $configuration->$func($value);
        }

        return $configuration;
    }

    /**
     * Get the value of layout
     *
     * @return  string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set the value of layout
     *
     * @param  string  $layout
     *
     * @return  self
     */
    public function setLayout(string $layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get the value of position
     *
     * @return  string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @param  string  $position
     *
     * @return  self
     */
    public function setPosition(string $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of behaviourAppearance
     *
     * @return  string
     */
    public function getBehaviourAppearance()
    {
        return $this->behaviourAppearance;
    }

    /**
     * Set the value of behaviourAppearance
     *
     * @param  string  $behaviourAppearance
     *
     * @return  self
     */
    public function setBehaviourAppearance(string $behaviourAppearance)
    {
        $this->behaviourAppearance = $behaviourAppearance;

        return $this;
    }

    /**
     * Get the value of popupContent
     */
    public function getPopupContent()
    {
        return $this->popupContent;
    }

    /**
     * Set the value of popupContent
     *
     * @return  self
     */
    public function setPopupContent($popupContent)
    {
        $this->popupContent = $popupContent;

        return $this;
    }
}

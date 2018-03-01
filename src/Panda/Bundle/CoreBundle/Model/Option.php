<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace Panda\Bundle\CoreBundle\Model;

class Option implements OptionInterface
{
    use IdentifiableTrait;

    /**
     * @var string
     */
    protected $optionName;

    /**
     * @var string
     */
    protected $optionValue;


    /**
     * @var boolean
     */
    protected $autoload;

    /**
     * @return string
     */
    public function getOptionName(): string
    {
        return $this->optionName;
    }

    /**
     * @param string $optionName
     * @return Option
     */
    public function setOptionName(string $optionName): Option
    {
        $this->optionName = $optionName;

        return $this;
    }

    /**
     * @return string
     */
    public function getOptionValue(): string
    {
        return $this->optionValue;
    }

    /**
     * @param string $optionValue
     * @return Option
     */
    public function setOptionValue(string $optionValue): Option
    {
        $this->optionValue = $optionValue;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoload(): bool
    {
        return $this->autoload;
    }

    /**
     * @param bool $autoload
     * @return Option
     */
    public function setAutoload(bool $autoload): Option
    {
        $this->autoload = $autoload;

        return $this;
    }
}
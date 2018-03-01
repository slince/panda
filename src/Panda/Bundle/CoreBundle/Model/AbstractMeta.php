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

abstract class AbstractMeta implements MetaInterface
{
    /**
     * @var string
     */
    protected $metaKey;

    /**
     * @var string
     */
    protected $metaValue;

    /**
     * @return string
     */
    public function getMetaKey(): string
    {
        return $this->metaKey;
    }

    /**
     * @param string $metaKey
     * @return AbstractMeta
     */
    public function setMetaKey(string $metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaValue(): string
    {
        return $this->metaValue;
    }

    /**
     * @param string $metaValue
     * @return AbstractMeta
     */
    public function setMetaValue(string $metaValue)
    {
        $this->metaValue = $metaValue;

        return $this;
    }
}
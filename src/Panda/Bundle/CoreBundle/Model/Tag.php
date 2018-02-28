<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Panda\Bundle\CoreBundle\Model;


class Tag implements TagInterface
{
    use IdentifiableTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Tag
     */
    public function setName(string $name): Tag
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Tag
     */
    public function setCreatedAt(\DateTime $createdAt): Tag
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}
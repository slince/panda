<?php

/*
 * This file is part of the slince/panda
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Panda\Bundle\UserBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as FosUser;
use Panda\Bundle\CoreBundle\Model\DateTimeTrait;
use Panda\Bundle\CoreBundle\Model\IdentifiableTrait;
use Panda\Bundle\CoreBundle\Model\MetasAwareTrait;

class User extends FosUser implements UserInterface
{
    use IdentifiableTrait, DateTimeTrait, MetasAwareTrait;

    /**
     * 头像
     *
     * @var string
     */
    protected $avatar;

    /**
     * @var int
     */
    protected $postCount;

    /**
     * @var int
     */
    protected $gender;


    /**
     * 元数据
     * @var UserMetaInterface[]|Collection
     */
    protected $metas;

    public function __construct()
    {
        parent::__construct();

        $this->metas = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return int
     */
    public function getPostCount()
    {
        return $this->postCount;
    }

    /**
     * @param int $postCount
     * @return User
     */
    public function setPostCount($postCount)
    {
        $this->postCount = $postCount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isWomen()
    {
        return $this->gender === UserInterface::GENDER_WOMEN;
    }
}
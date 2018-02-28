<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Panda\Bundle\UserBundle\Model;

use Panda\Bundle\CoreBundle\Model\DateTimeInterface;
use Panda\Bundle\CoreBundle\Model\EnabledInterface;
use Panda\Bundle\CoreBundle\Model\IdentifiableInterface;
use FOS\UserBundle\Model\UserInterface as FOSUserInterface;

interface UserInterface extends FOSUserInterface, IdentifiableInterface, DateTimeInterface
{
    /**
     * 男性.
     *
     * @var int
     */
    const GENDER_MEN = 1;

    /**
     * 女性.
     *
     * @var int
     */
    const GENDER_WOMEN = 2;

    /**
     * 是否是女性.
     *
     * @return bool
     */
    public function isWomen();

    /**
     * 获取文章数量.
     *
     * @return int
     */
    public function getPostCount();

    /**
     * 设置文章数量.
     *
     * @param int $postCount
     *
     * @return UserInterface
     */
    public function setPostCount($postCount);

    /**
     * 获取avatar的路径.
     *
     * @return string
     */
    public function getAvatar();

    /**
     * 设置avatar的路径.
     *
     * @param string $avatar
     *
     * @return UserInterface
     */
    public function setAvatar($avatar);
}

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

namespace Panda\Bundle\UserBundle\Model;

use Panda\Bundle\CoreBundle\Model\MetaInterface;

interface UserMetaInterface extends MetaInterface
{
    /**
     * 获取user
     * @return UserInterface
     */
    public function getUser(): UserInterface;

    /**
     * 设置user
     * @param UserInterface $user
     * @return self
     */
    public function setUser(UserInterface $user);
}
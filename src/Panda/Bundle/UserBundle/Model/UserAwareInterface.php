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

interface UserAwareInterface
{
    /**
     * 获取用户
     * @return UserInterface
     */
    public function getUser(): UserInterface;

    /**
     * 设置用户
     * @param UserInterface $user
     * @return self
     */
    public function setUser(UserInterface $user);
}
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

use Panda\Bundle\CoreBundle\Model\AbstractMeta;
use Panda\Bundle\CoreBundle\Model\IdentifiableTrait;

class UserMeta extends AbstractMeta implements UserMetaInterface
{
    use IdentifiableTrait;

    /**
     * @var UserInterface
     */
    protected $user;

    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface
    {
        return $this->user;
    }

    /**
     * @param UserInterface $User
     * @return UserMeta
     */
    public function setUser(UserInterface $User): UserMeta
    {
        $this->user = $User;

        return $this;
    }
}
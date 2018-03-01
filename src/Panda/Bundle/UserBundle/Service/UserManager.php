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

namespace Panda\Bundle\UserBundle\Service;

use FOS\UserBundle\Doctrine\UserManager as FOSUserManager;

class UserManager extends FOSUserManager implements UserManagerInterface
{

}
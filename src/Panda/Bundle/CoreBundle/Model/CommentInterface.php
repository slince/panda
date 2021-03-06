<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace  Panda\Bundle\CoreBundle\Model;

use Panda\Bundle\UserBundle\Model\UserAwareInterface;

interface CommentInterface extends ContentInterface, DateTimeInterface, UserAwareInterface, EnabledInterface
{
}

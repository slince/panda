<?php

namespace Panda\Bundle\CoreBundle\Model;

use Panda\Bundle\UserBundle\Model\UserAwareTrait;

abstract class AbstractComment implements CommentInterface
{
    use ContentTrait, DateTimeTrait, UserAwareTrait, EnabledTrait;
}

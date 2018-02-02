<?php
/**
 * Panda Core Component.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace Panda\Bundle\CoreBundle\Model;

use Panda\Bundle\UserBundle\Model\UserAwareTrait;

abstract class Vote implements VoteInterface
{
    use DateTimeTrait, UserAwareTrait, IdentifiableTrait;
}

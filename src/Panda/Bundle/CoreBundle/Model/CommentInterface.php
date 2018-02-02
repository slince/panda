<?php
/**
 * Panda comment component.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace  Panda\Bundle\CoreBundle\Model;

use Panda\Bundle\UserBundle\Model\UserAwareInterface;

interface CommentInterface extends IdentifiableInterface, ContentInterface, DateTimeInterface, UserAwareInterface, EnabledInterface
{
}

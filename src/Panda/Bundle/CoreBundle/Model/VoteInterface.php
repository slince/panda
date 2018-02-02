<?php
/**
 * Panda vote component.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace  Panda\Bundle\CoreBundle\Model;

interface VoteInterface extends DateTimeInterface, IdentifiableInterface
{
    /**
     * 获取id.
     *
     * @return int
     */
    public function getId();
}

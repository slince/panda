<?php
/**
 * Panda comment component.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace Panda\Bundle\CoreBundle\Model;

interface CommentableInterface
{
    /**
     * 获取评论数量.
     *
     * @return int
     */
    public function getCommentCount();
}

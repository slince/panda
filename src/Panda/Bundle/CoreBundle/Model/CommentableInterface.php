<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
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

    /**
     * 获取评论
     * @return CommentInterface[]
     */
    public function getComments();

    /**
     * 添加评论
     *
     * @param CommentInterface $comment
     * @return self
     */
    public function addComment(CommentInterface $comment);
}

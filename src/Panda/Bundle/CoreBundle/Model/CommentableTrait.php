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

trait CommentableTrait
{
    /**
     * @var int
     */
    protected $commentCount = 0;

    /**
     * 评论
     * @var CommentInterface[]
     */
    protected $comments;

    /**
     * Set commentCount.
     *
     * @param int $commentCount
     *
     * @return $this
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * Get commentCount.
     *
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * 添加一条评论
     * @param CommentInterface $comment
     * @return self
     */
    public function addComment(CommentInterface $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * 获取全部评论
     * @return CommentInterface[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }
}

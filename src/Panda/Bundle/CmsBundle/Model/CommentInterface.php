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

namespace Panda\Bundle\CmsBundle\Model;

use Panda\Bundle\CoreBundle\Model\CommentInterface as BaseCommentInterface;
use Panda\Bundle\CoreBundle\Model\IdentifiableInterface;
use Panda\Bundle\CoreBundle\Model\MetasAwareInterface;

interface CommentInterface extends IdentifiableInterface, BaseCommentInterface, MetasAwareInterface
{
    /**
     * 获取post
     *
     * @return PostInterface
     */
    public function getPost();

    /**
     * 设置post
     * @param PostInterface $post
     * @return self
     */
    public function setPost(PostInterface $post);
}
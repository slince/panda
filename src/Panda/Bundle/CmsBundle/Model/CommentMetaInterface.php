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

use Panda\Bundle\CoreBundle\Model\MetaInterface;

interface CommentMetaInterface extends MetaInterface
{
    /**
     * 获取Comment
     * @return CommentInterface
     */
    public function getComment(): CommentInterface;

    /**
     * 设置Comment
     * @param CommentInterface $comment
     * @return self
     */
    public function setComment(CommentInterface $comment);
}
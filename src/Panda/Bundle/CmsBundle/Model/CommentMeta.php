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

use Panda\Bundle\CoreBundle\Model\AbstractMeta;
use Panda\Bundle\CoreBundle\Model\IdentifiableTrait;

class CommentMeta extends AbstractMeta implements CommentMetaInterface
{
    use IdentifiableTrait;

    /**
     * @var CommentInterface
     */
    protected $comment;

    /**
     * @return CommentInterface
     */
    public function getComment(): CommentInterface
    {
        return $this->comment;
    }

    /**
     * @param CommentInterface $comment
     * @return CommentMeta
     */
    public function setComment(CommentInterface $comment): CommentMeta
    {
        $this->comment = $comment;

        return $this;
    }
}
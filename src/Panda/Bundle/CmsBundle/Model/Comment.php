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

use Panda\Bundle\CoreBundle\Model\AbstractComment;
use Panda\Bundle\CoreBundle\Model\IdentifiableTrait;
use Panda\Bundle\CoreBundle\Model\MetasAwareTrait;

class Comment extends AbstractComment implements CommentInterface
{
    use IdentifiableTrait, MetasAwareTrait;

    /**
     * @var PostInterface
     */
    protected $post;

    /**
     * {@inheritdoc}
     */
    public function getPost(): PostInterface
    {
        return $this->post;
    }

    /**
     * {@inheritdoc}
     */
    public function setPost(PostInterface $post): Comment
    {
        $this->post = $post;

        return $this;
    }
}
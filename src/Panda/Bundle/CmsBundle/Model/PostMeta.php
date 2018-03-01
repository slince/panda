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

class PostMeta extends AbstractMeta implements PostMetaInterface
{
    use IdentifiableTrait;

    /**
     * @var PostInterface
     */
    protected $post;

    /**
     * @return PostInterface
     */
    public function getPost(): PostInterface
    {
        return $this->post;
    }

    /**
     * @param PostInterface $post
     * @return PostMeta
     */
    public function setPost(PostInterface $post): PostMeta
    {
        $this->post = $post;

        return $this;
    }
}
<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Panda\Bundle\CmsBundle\Model;

use Panda\Bundle\CoreBundle\Model\EnabledTrait;
use Panda\Bundle\CoreBundle\Model\IdentifiableTrait;
use Panda\Bundle\CoreBundle\Model\Taxonomy;

class Category extends Taxonomy implements CategoryInterface
{
    use IdentifiableTrait, EnabledTrait;

    /**
     * post
     * @var PostInterface[]
     */
    protected $posts;


    /**
     * 文章数量
     * @var int
     */
    protected $postCount;

    /**
     * {@inheritdoc}
     */
    public function addPost(PostInterface $post)
    {
        $this->posts[] = $post;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostCount(): int
    {
        return $this->postCount;
    }

    /**
     * {@inheritdoc}
     */
    public function addPostCount(int $count = 1)
    {
        $this->postCount += $count;
    }
}
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

use Doctrine\Common\Collections\ArrayCollection;
use Panda\Bundle\CoreBundle\Model\EnabledTrait;
use Panda\Bundle\CoreBundle\Model\IdentifiableTrait;
use Panda\Bundle\CoreBundle\Model\MetasAwareTrait;
use Panda\Bundle\CoreBundle\Model\Taxonomy;

class Category extends Taxonomy implements CategoryInterface
{
    use IdentifiableTrait, EnabledTrait, MetasAwareTrait;

    /**
     * 类型，普通分类
     * @var string
     */
    const TYPE_CATEGORY = 'category';

    /**
     * 类型
     * @var string
     */
    protected $type;

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

    public function __construct(?string $type = null)
    {
        $this->type = $type ?? static::TYPE_CATEGORY;
        $this->posts = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function addPost(PostInterface $post)
    {
        $this->posts[] = $post;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removePost(PostInterface $post)
    {
        $this->posts->removeElement($post);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPosts(): array
    {
        return $this->posts;
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

    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }
}
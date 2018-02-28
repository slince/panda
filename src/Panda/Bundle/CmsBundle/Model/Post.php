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

use Panda\Bundle\CoreBundle\Model\CommentableTrait;
use Panda\Bundle\CoreBundle\Model\ContentTrait;
use Panda\Bundle\CoreBundle\Model\DateTimeTrait;
use Panda\Bundle\CoreBundle\Model\EnabledTrait;
use Panda\Bundle\CoreBundle\Model\IdentifiableTrait;
use Panda\Bundle\CoreBundle\Model\TagsAwareTrait;
use Panda\Bundle\UserBundle\Model\UserAwareTrait;
use Panda\Bundle\UserBundle\Model\UserInterface;

class Post implements PostInterface
{
    use IdentifiableTrait, ContentTrait,
        DateTimeTrait, EnabledTrait,
        TagsAwareTrait, UserAwareTrait,
        CommentableTrait;

    /**
     * @var string
     */
    protected $title;

    /**
     * 阅读数量
     * @var int
     */
    protected $viewCount;

    /**
     * {@inheritdoc}
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthor(): UserInterface
    {
        return $this->getUser();
    }

    /**
     * @return int
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setViewCount(int $viewCount): Post
    {
        $this->viewCount = $viewCount;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addViewCount(int $count = 1): Post
    {
        $this->viewCount += $count;
        return $this;
    }
}
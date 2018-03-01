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

use Panda\Bundle\CoreBundle\Model\CommentableInterface;
use Panda\Bundle\CoreBundle\Model\CommentInterface;
use Panda\Bundle\CoreBundle\Model\ContentInterface;
use Panda\Bundle\CoreBundle\Model\DateTimeInterface;
use Panda\Bundle\CoreBundle\Model\EnabledInterface;
use Panda\Bundle\CoreBundle\Model\IdentifiableInterface;
use Panda\Bundle\CoreBundle\Model\TagsAwareInterface;
use Panda\Bundle\UserBundle\Model\UserAwareInterface;
use Panda\Bundle\UserBundle\Model\UserInterface;

interface PostInterface extends
    IdentifiableInterface,
    ContentInterface,
    UserAwareInterface,
    TagsAwareInterface,
    CommentableInterface,
    EnabledInterface,
    DateTimeInterface
{
    /**
     * 获取标题
     * @return string
     */
    public function getTitle(): string ;

    /**
     * 获取阅读数量
     * @return int
     */
    public function getViewCount(): int;

    /**
     * 设置阅读数量
     * @param int $count
     * @return self
     */
    public function setViewCount(int $count);

    /**
     * 增加阅读数量
     * @param int $count
     * @return self
     */
    public function addViewCount(int $count = 1);

    /**
     * 获取作者
     * @return UserInterface
     */
    public function getAuthor();

    /**
     * 获取meta
     * @return PostMetaInterface[]
     */
    public function getMetas();
}
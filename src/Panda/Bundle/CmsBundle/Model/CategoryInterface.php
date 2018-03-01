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

use Panda\Bundle\CoreBundle\Model\EnabledInterface;
use Panda\Bundle\CoreBundle\Model\TaxonomyInterface;

interface CategoryInterface extends TaxonomyInterface, EnabledInterface
{
    /**
     * 添加一篇文章
     * @param PostInterface $post
     * @return self
     */
    public function addPost(PostInterface $post);

    /**
     * 获取文章数量
     * @return int
     */
    public function getPostCount(): int;

    /**
     * 增加数量
     * @param int $count
     * @return self
     */
    public function addPostCount(int $count = 1);
}
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

interface CategoryMetaInterface extends MetaInterface
{
    /**
     * 获取 category
     * @return CategoryInterface
     */
    public function getCategory(): CategoryInterface;

    /**
     * 设置分类
     * @param CategoryInterface $category
     * @return self
     */
    public function setCategory(CategoryInterface $category);
}
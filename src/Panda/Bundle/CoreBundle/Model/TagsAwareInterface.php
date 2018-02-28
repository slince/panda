<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Panda\Bundle\CoreBundle\Model;

interface TagsAwareInterface
{
    /**
     * 获取标签
     * @return TagInterface[]
     */
    public function getTags();

    /**
     * 添加标签
     * @param TagInterface $tag
     * @return self
     */
    public function addTag(TagInterface $tag);

    /**
     * 移除标签
     * @param TagInterface $tag
     * @return self
     */
    public function removeTag(TagInterface $tag);
}
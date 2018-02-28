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

use Doctrine\Common\Collections\Collection;

trait TagsAwareTrait
{
    /**
     * @var Collection|TagInterface[]
     */
    protected $tags;

    /**
     * 获取所有标签
     * @return Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * 添加标签
     * @param TagInterface $tag
     * @return self
     */
    public function addTag(TagInterface $tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

    /**
     * 移除标签
     * @param TagInterface $tag
     * @return self
     */
    public function removeTag(TagInterface $tag)
    {
        $this->tags->removeElement($tag);
        return $this;
    }
}
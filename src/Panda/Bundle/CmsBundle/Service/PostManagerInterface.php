<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Panda\Bundle\CmsBundle\Service;

use Panda\Bundle\CmsBundle\Model\PostInterface;

interface PostManagerInterface
{
    /**
     * 创建文档
     *
     * @param string|null $type
     * @return PostInterface
     */
    public function createPost(?string $type = null): PostInterface;

    /**
     * 保存文档
     *
     * @param PostInterface $post
     */
    public function savePost(PostInterface $post): void;


    public function findPostBy();
}
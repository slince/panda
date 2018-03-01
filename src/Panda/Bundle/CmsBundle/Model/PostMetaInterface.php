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

interface PostMetaInterface extends MetaInterface
{
    /**
     * 获取post
     * @return PostInterface
     */
    public function getPost(): PostInterface;

    /**
     * 设置post
     * @param PostInterface $post
     * @return self
     */
    public function setPost(PostInterface $post);
}
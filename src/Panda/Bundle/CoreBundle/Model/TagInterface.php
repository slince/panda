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

interface TagInterface extends IdentifiableInterface
{
    /**
     * 获取标签名
     * @return string
     */
    public function getName();

    /**
     * 获取创建时间
     * @return \DateTime
     */
    public function getCreatedAt();
}
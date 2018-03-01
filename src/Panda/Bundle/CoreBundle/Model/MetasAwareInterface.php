<?php

/*
 * This file is part of the slince/panda
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace Panda\Bundle\CoreBundle\Model;

interface MetasAwareInterface
{
    /**
     * 获取元数据
     * @return MetaInterface[]
     */
    public function getMetas(): array;

    /**
     * 添加元数据
     * @param MetaInterface $meta
     * @return self
     */
    public function addMeta(MetaInterface $meta);
}
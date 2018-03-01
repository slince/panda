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

namespace Panda\Bundle\CoreBundle\Model;

interface MetaInterface
{
    /**
     * 获取meta key
     * @return string
     */
    public function getMetaKey(): string;

    /**
     * 获取meta value
     * @return string
     */
    public function getMetaValue(): string;
}
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

interface OptionInterface extends IdentifiableInterface
{
    /**
     * 获取选项名
     * @return string
     */
    public function getOptionName(): string;

    /**
     * 获取选项值
     * @return string
     */
    public function getOptionValue(): string;

    /**
     * 是否自动加载
     * @return boolean
     */
    public function isAutoload(): bool;
}
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

use Panda\Bundle\CoreBundle\Model\AbstractMeta;
use Panda\Bundle\CoreBundle\Model\IdentifiableTrait;

class CategoryMeta extends AbstractMeta implements CategoryMetaInterface
{
    use IdentifiableTrait;

    /**
     * @var CategoryInterface
     */
    protected $category;

    /**
     * @return CategoryInterface
     */
    public function getCategory(): CategoryInterface
    {
        return $this->category;
    }

    /**
     * @param CategoryInterface $category
     * @return CategoryMeta
     */
    public function setCategory(CategoryInterface $category): CategoryMeta
    {
        $this->category = $category;

        return $this;
    }
}
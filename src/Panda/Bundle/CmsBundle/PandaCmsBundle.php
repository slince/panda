<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Panda\Bundle\CmsBundle;

use Panda\Bundle\CoreBundle\AbstractBundle;

class PandaCmsBundle extends AbstractBundle
{
    /**
     * {@inheritdoc}
     */
    public function getModelNamespace(): string
    {
        return 'Panda\Bundle\CmsBundle\Model';
    }
}

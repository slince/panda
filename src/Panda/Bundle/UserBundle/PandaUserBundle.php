<?php

namespace Panda\Bundle\UserBundle;

use Panda\Bundle\CoreBundle\AbstractBundle;

class PandaUserBundle extends AbstractBundle
{
    /**
     * {@inheritdoc}
     */
    protected function getModelNamespace(): string
    {
        return 'Panda\Bundle\UserBundle\Model';
    }
}

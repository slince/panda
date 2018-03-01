<?php

namespace Panda\Bundle\UserBundle;

use Panda\Bundle\CoreBundle\AbstractBundle;
use Panda\Bundle\CoreBundle\DependencyInjection\EntitiesOverridableExtensionInterface;
use Panda\Bundle\UserBundle\Model\User;
use Panda\Bundle\UserBundle\Model\UserInterface;

class PandaUserBundle extends AbstractBundle implements EntitiesOverridableExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function getModelNamespace(): string
    {
        return 'Panda\Bundle\UserBundle\Model';
    }

    /**
     * {@inheritdoc}
     */
    public function getEntitiesOverrides(): array
    {
        return [
            UserInterface::class => User::class
        ];
    }
}

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

namespace Panda\Bundle\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

abstract class AbstractExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function prepend(ContainerBuilder $container)
    {
        $this->overrideEntities($container);
    }

    protected function overrideEntities(ContainerBuilder $container)
    {
        if ($this instanceof EntitiesOverridableExtensionInterface) {
            $overrides = $this->getEntitiesOverrides();
            $container->prependExtensionConfig('doctrine', [
                'orm' => [
                    'resolve_target_entities' => $overrides,
                ],
            ]);
        }
    }
}
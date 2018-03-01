<?php

namespace Panda\Bundle\CmsBundle\DependencyInjection;

use Panda\Bundle\CmsBundle\Model\Category;
use Panda\Bundle\CmsBundle\Model\CategoryInterface;
use Panda\Bundle\CmsBundle\Model\Post;
use Panda\Bundle\CmsBundle\Model\PostInterface;
use Panda\Bundle\CmsBundle\Model\PostMeta;
use Panda\Bundle\CmsBundle\Model\PostMetaInterface;
use Panda\Bundle\CoreBundle\DependencyInjection\AbstractExtension;
use Panda\Bundle\CoreBundle\DependencyInjection\EntitiesOverridableExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class PandaCmsExtension extends AbstractExtension implements EntitiesOverridableExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }

    /**
     * {@inheritdoc}
     */
    public function getEntitiesOverrides(): array
    {
        return [
            CategoryInterface::class => Category::class,
            PostInterface::class => Post::class,
            PostMetaInterface::class => PostMeta::class
        ];
    }
}

<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */


namespace Panda\Bundle\CmsBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Panda\Bundle\CmsBundle\Model\Post;
use Panda\Bundle\CmsBundle\Model\PostInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class PostManager implements PostManagerInterface
{
    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    public function __construct(
        EntityManagerInterface $entityManager,
        EventDispatcherInterface $eventDispatcher
    ) {
        $this->eventDispatcher = $eventDispatcher;
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function createPost(?string $type = null): PostInterface
    {
        $post = new Post($type);
        return $post;
    }

    /**
     * {@inheritdoc}
     */
    public function savePost(PostInterface $post): void
    {
        $this->entityManager->persist($post);
        $this->entityManager->flush();
    }

    /**
     * @return EntityRepository
     */
    public function getRepository()
    {
        return $this->entityManager->getRepository(Post::class);
    }
}
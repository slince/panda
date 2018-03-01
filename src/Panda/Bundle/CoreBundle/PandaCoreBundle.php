<?php

namespace Panda\Bundle\CoreBundle;

class PandaCoreBundle extends AbstractBundle
{
    /**
     * {@inheritdoc}
     */
    public function getModelNamespace(): ?string
    {
        return 'Panda\Bundle\CoreBundle\Model';
    }
}

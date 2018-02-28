<?php

namespace Panda\Bundle\CoreBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait ContentTrait
{
    /**
     * @var string
     */
    protected $body;

    /**
     * Set body.
     *
     * @param string $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
}

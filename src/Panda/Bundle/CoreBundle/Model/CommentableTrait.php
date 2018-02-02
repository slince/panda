<?php

namespace Panda\Bundle\CoreBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait CommentableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $commentCount = 0;

    /**
     * Set commentCount.
     *
     * @param int $commentCount
     *
     * @return $this
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * Get commentCount.
     *
     * @return int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }
}

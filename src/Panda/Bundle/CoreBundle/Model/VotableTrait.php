<?php
/**
 * Panda comment component.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace Panda\Bundle\CoreBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait VotableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $voteCount = 0;

    /**
     * Set voteCount.
     *
     * @param int $voteCount
     *
     * @return $this
     */
    public function setVoteCount($voteCount)
    {
        $this->voteCount = $voteCount;

        return $this;
    }

    /**
     * Get voteCount.
     *
     * @return int
     */
    public function getVoteCount()
    {
        return $this->voteCount;
    }
}

<?php
/**
 * Panda vote component.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace  Panda\Bundle\CoreBundle\Model;

interface VotableInterface
{
    /**
     * 设置投票数量.
     *
     * @param int $voteCount
     *
     * @return VotableInterface
     */
    public function setVoteCount($voteCount);

    /**
     * 获取赞次数.
     *
     * @return int
     */
    public function getVoteCount();
}

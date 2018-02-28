<?php

namespace Panda\Bundle\CoreBundle\Model;

interface ContentInterface
{
    /**
     * 获取格式化之后的body.
     *
     * @return string
     */
    public function getBody();

    /**
     * 设置body.
     *
     * @param string $body
     *
     * @return string
     */
    public function setBody($body);
}

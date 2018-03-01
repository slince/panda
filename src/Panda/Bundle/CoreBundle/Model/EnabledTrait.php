<?php

/*
 * This file is part of the slince/pandacms
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace Panda\Bundle\CoreBundle\Model;

trait EnabledTrait
{
    /**
     * @var boolean
     */
    protected $enabled = true;

    /**
     * Set if is enabled.
     *
     * @param bool $enabled enabled value
     *
     * @return $this Self object
     */
    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get is enabled.
     *
     * @return bool is enabled
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Enable.
     *
     * @return $this Self object
     */
    public function enable()
    {
        return $this->setEnabled(true);
    }

    /**
     * Disable.
     *
     * @return $this Self object
     */
    public function disable()
    {
        return $this->setEnabled(false);
    }
}

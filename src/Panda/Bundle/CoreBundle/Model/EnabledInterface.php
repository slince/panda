<?php

namespace Panda\Bundle\CoreBundle\Model;

/**
 * Interface EnabledInterface.
 */
interface EnabledInterface
{
    /**
     * Set isEnabled.
     *
     * @param bool $enabled enabled value
     *
     * @return $this Self object
     */
    public function setEnabled(bool $enabled);

    /**
     * Get if entity is enabled.
     *
     * @return bool Enabled
     */
    public function isEnabled(): bool;

    /**
     * Disable the entity.
     *
     * @return $this
     */
    public function disable();

    /**
     * Enable the entity.
     *
     * @return $this
     */
    public function enable();
}

<?php
namespace mac\bit;

use ReflectionClass;
use ReflectionProperty;

trait Bit
{
    /**
     * @param int $flag
     * @param $flags
     * @return bool
     */
    protected function isFlagSet($flag, $flags)
    {
        return (($flags & $flag) > 0);
    }

    /**
     * @param int $flag
     * @param $flags
     */
    protected function setFlag($flag, &$flags)
    {
        $flags |= $flag;
    }

    /**
     * @param int $flag
     * @param $flags
     */
    protected function unsetFlag($flag, &$flags)
    {
        $flags &= ~$flag;
    }

    /**
     * @param int $flag
     * @param $flags
     */
    protected function toggleFlag($flag, &$flags)
    {
        $this->isFlagSet($flag, $flags) ? $this->unsetFlag($flag, $flags) : $this->setFlag($flag, $flags);
    }
}

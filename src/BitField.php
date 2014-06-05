<?php
namespace mac\bit;

use ReflectionClass;
use ReflectionProperty;

trait BitField
{
    /**
     * @var int flags
     */
    protected $flags;

    /**
     * @param int $flag
     * @return bool
     */
    protected function isFlagSet($flag)
    {
        return (($this->flags & $flag) == $flag);
    }

    /**
     * @param int $flag
     */
    protected function setFlag($flag)
    {
        $this->flags |= $flag;
    }

    /**
     * @param int $flag
     */
    protected function unsetFlag($flag)
    {
        $this->flags &= ~$flag;
    }

    /**
     * @param int $flag
     */
    protected function toggleFlag($flag)
    {
        $this->isFlagSet($flag) ? $this->unsetFlag($flag) : $this->setFlag($flag);
    }
}

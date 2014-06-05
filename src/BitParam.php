<?php
namespace mac\bit;

trait BitParam
{
    /**
     * @param int $expectedFlags
     * @param int $givenFlags
     * @return bool
     */
    protected function isBitSet($expectedFlags, $givenFlags)
    {
        return ($expectedFlags & $givenFlags) > 0;
    }
}

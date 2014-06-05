<?php
namespace mac\bit\Tests;

use mac\bit\Bit;

class User
{
    const NONE = 0;
    const REGISTERED = 1;
    const ACTIVE = 2;
    const MEMBER = 4;
    const ADMIN = 8;
    const ALL = 15;

    use Bit;

    protected $flags;

    public function setRegistered()
    {
        $this->setFlag(self::REGISTERED, $this->flags);
    }

    public function setActive()
    {
        $this->setFlag(self::ACTIVE, $this->flags);
    }

    public function setMember()
    {
        $this->setFlag(self::MEMBER, $this->flags);
    }

    public function setAdmin()
    {
        $this->setFlag(self::ADMIN, $this->flags);
    }

    public function unsetRegistered()
    {
        $this->unsetFlag(self::REGISTERED, $this->flags);
    }

    public function unsetActive()
    {
        $this->unsetFlag(self::ACTIVE, $this->flags);
    }

    public function unsetMember()
    {
        $this->unsetFlag(self::MEMBER, $this->flags);
    }

    public function unsetAdmin()
    {
        $this->unsetFlag(self::ADMIN, $this->flags);
    }

    public function toggleRegistered()
    {
        $this->toggleFlag(self::REGISTERED, $this->flags);
    }

    public function toggleActive()
    {
        $this->toggleFlag(self::ACTIVE, $this->flags);
    }

    public function toggleMember()
    {
        $this->toggleFlag(self::MEMBER, $this->flags);
    }

    public function toggleAdmin()
    {
        $this->toggleFlag(self::ADMIN, $this->flags);
    }

    public function isRegistered()
    {
        return $this->isFlagSet(self::REGISTERED, $this->flags);
    }

    public function isActive()
    {
        return $this->isFlagSet(self::ACTIVE, $this->flags);
    }

    public function isMember()
    {
        return $this->isFlagSet(self::MEMBER, $this->flags);
    }

    public function isAdmin()
    {
        return $this->isFlagSet(self::ADMIN, $this->flags);
    }

    public function isChecked($flags)
    {
        return $this->isFlagSet($flags, $flags);
    }
}

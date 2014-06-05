<?php
namespace mac\bit\Tests;

use mac\bit\BitField;

class User
{
    const NONE = 0;
    const REGISTERED = 1;
    const ACTIVE = 2;
    const MEMBER = 4;
    const ADMIN = 8;
    const ALL = 15;

    use BitField;

    public function setRegistered()
    {
        $this->setFlag(self::REGISTERED);
    }

    public function setActive()
    {
        $this->setFlag(self::ACTIVE);
    }

    public function setMember()
    {
        $this->setFlag(self::MEMBER);
    }

    public function setAdmin()
    {
        $this->setFlag(self::ADMIN);
    }

    public function unsetRegistered()
    {
        $this->unsetFlag(self::REGISTERED);
    }

    public function unsetActive()
    {
        $this->unsetFlag(self::ACTIVE);
    }

    public function unsetMember()
    {
        $this->unsetFlag(self::MEMBER);
    }

    public function unsetAdmin()
    {
        $this->unsetFlag(self::ADMIN);
    }

    public function toggleRegistered()
    {
        $this->toggleFlag(self::REGISTERED);
    }

    public function toggleActive()
    {
        $this->toggleFlag(self::ACTIVE);
    }

    public function toggleMember()
    {
        $this->toggleFlag(self::MEMBER);
    }

    public function toggleAdmin()
    {
        $this->toggleFlag(self::ADMIN);
    }

    public function isRegistered()
    {
        return $this->isFlagSet(self::REGISTERED);
    }

    public function isActive()
    {
        return $this->isFlagSet(self::ACTIVE);
    }

    public function isMember()
    {
        return $this->isFlagSet(self::MEMBER);
    }

    public function isAdmin()
    {
        return $this->isFlagSet(self::ADMIN);
    }
}

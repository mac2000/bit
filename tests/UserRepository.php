<?php
namespace mac\bit\Tests;

use mac\bit\BitParam;

class UserRepository
{
    use BitParam;

    public function create($flags = User::NONE)
    {
        $user = new User();

        if (self::isBitSet(User::MEMBER, $flags)) {
            $user->setMember();
        }

        if (self::isBitSet(User::ACTIVE, $flags)) {
            $user->setActive();
        }

        if (self::isBitSet(User::ADMIN, $flags)) {
            $user->setAdmin();
        }

        if (self::isBitSet(User::REGISTERED, $flags)) {
            $user->setRegistered();
        }

        return $user;
    }
}

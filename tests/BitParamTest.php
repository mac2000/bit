<?php
namespace mac\bit\Tests;

use PHPUnit_Framework_TestCase;

class BitParamTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var UserRepository
     */
    protected $repository;

    public function setUp()
    {
        $this->repository = new UserRepository();
    }

    /**
     * @dataProvider getUseCases
     */
    public function testIsBitSet($flags, $isAdmin, $isRegistered, $isActive, $isMember)
    {
        $user = $this->repository->create($flags);

        $this->assertEquals($isAdmin, $user->isAdmin());
        $this->assertEquals($isRegistered, $user->isRegistered());
        $this->assertEquals($isActive, $user->isActive());
        $this->assertEquals($isMember, $user->isMember());
    }

    public function getUseCases()
    {
        return [
            [User::NONE, false, false, false, false],
            [User::ALL, true, true, true, true],
            [User::ADMIN | User::REGISTERED, true, true, false, false],
            [User::ALL & ~User::ADMIN, false, true, true, true]
        ];
    }
}

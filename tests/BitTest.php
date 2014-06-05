<?php
namespace mac\bit\Tests;

use PHPUnit_Framework_TestCase;

class BitTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var User
     */
    protected $user;

    /**
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function setUp()
    {
        $this->user = new User();
    }

    public function testInitialFlags()
    {
        $this->assertFalse($this->user->isAdmin());
        $this->assertFalse($this->user->isRegistered());
        $this->assertFalse($this->user->isActive());
        $this->assertFalse($this->user->isMember());
    }

    public function testCanSetFlags()
    {
        $this->user->setActive();
        $this->user->setAdmin();
        $this->user->setMember();
        $this->user->setRegistered();

        $this->assertTrue($this->user->isAdmin());
        $this->assertTrue($this->user->isRegistered());
        $this->assertTrue($this->user->isActive());
        $this->assertTrue($this->user->isMember());
    }

    public function testCanUnsetFlags()
    {
        $this->user->unsetActive();
        $this->user->unsetAdmin();
        $this->user->unsetMember();
        $this->user->unsetRegistered();

        $this->assertFalse($this->user->isRegistered());
        $this->assertFalse($this->user->isActive());
        $this->assertFalse($this->user->isMember());
    }

    public function testCanToggleFlags()
    {
        $this->user->toggleActive();
        $this->user->toggleAdmin();
        $this->user->toggleMember();
        $this->user->toggleRegistered();

        $this->assertTrue($this->user->isAdmin());
        $this->assertTrue($this->user->isRegistered());
        $this->assertTrue($this->user->isActive());
        $this->assertTrue($this->user->isMember());
    }

    public function testCheckIsFlagSet()
    {
        $this->user->unsetActive();
        $this->assertTrue($this->user->isChecked(User::ADMIN | User::REGISTERED));
        $this->assertTrue($this->user->isChecked(User::ALL & ~User::ACTIVE));
    }
}

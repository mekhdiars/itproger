<?php

require_once 'src/app/models/TrimString.php';

use App\Models\User;
use function App\Models\trimString;

class UserTest extends PHPUnit\Framework\TestCase
{
    private $user;

    function testName()
    {
        $this->user = new User();
        $this->user->setData('M', 'Ars');
        $this->assertEquals($this->user->getData(), ['M', 'Ars']);
        $this->assertTrue($this->user->getFalse());
    }

    function testStringTrimmed()
    {
        $this->assertEquals('M', trimString('  M  '));
    }
}
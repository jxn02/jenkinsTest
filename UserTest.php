<?php
/**
 * Created by PhpStorm.
 * User: jlaouadi
 * Date: 26/01/2016
 * Time: 14:35
 */

require_once "User.php";
class UserTest extends PHPUnit_Framework_TestCase
{
    public function testTalk() {
        $user = new User();
        $expected = "Hello world!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
    }
}
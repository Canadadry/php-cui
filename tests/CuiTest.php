<?php

namespace Canadadry\PhpCui\Tests;

use Canadadry\PhpCui\Cui;
use PHPUnit\Framework\TestCase;

class CuiTest extends TestCase
{
    public function test_hello_world()
    {
        $cui = new Cui();
        $this->assertEquals($cui->helloWordl(),"hello world!");
    }

}

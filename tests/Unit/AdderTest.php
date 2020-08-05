<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Adder;

class AdderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // store the Adder object
    private $add;

    // create a new instance of the object when the test
    public function setUp() : void
    {
        $this->adder = new Adder();
    }
    public function testOnePlus0()
    {
    $this->assertSame(1, $this->adder->add(1, 0));
    }
    public function testOnePlusOne()
    {
    $this->assertSame(2, $this->adder->add(1, 1));
    }
    public function testTenPlus5()
    {
    $this->assertSame(15, $this->adder->add(10, 5));
    }
}

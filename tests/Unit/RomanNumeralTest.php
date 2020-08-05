<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\RomanNumeral;

class RomanNumeralTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    // store the RomanNumeral object
    private $rn;
    // create a new instance of the object
    // when the test starts
    public function setUp() : void
    {
            $this->rn = new RomanNumeral(); 
    }
    public function test1()
    {
        $this->assertSame("I", $this->rn->forNumber(1)); 
    }
    public function test2()
    {
        $this->assertSame("II", $this->rn->forNumber(2)); 
    }
    public function test3()
    {
        $this->assertSame("III", $this->rn->forNumber(3)); 
    }
    public function test4()
    {
        $this->assertSame("IV", $this->rn->forNumber(4)); 
    }
    public function test5()
    {
        $this->assertSame("V", $this->rn->forNumber(5)); 
    }
    public function test6()
    {
        $this->assertSame("VI", $this->rn->forNumber(6)); 
    }
    public function test7()
    {
        $this->assertSame("VII", $this->rn->forNumber(7)); 
    }
    public function test8()
    {
        $this->assertSame("VIII", $this->rn->forNumber(8)); 
    }
    public function test9()
    {
        $this->assertSame("IX", $this->rn->forNumber(9)); 
    }
    public function test10()
    {
        $this->assertSame("X", $this->rn->forNumber(10)); 
    }
    public function test11()
    {
        $this->assertSame("XI", $this->rn->forNumber(11)); 
    }
    public function test20()
    {
    $this->assertSame("XX", $this->rn->forNumber(20)); 
    }
    public function test30()
    {
    $this->assertSame("XXX", $this->rn->forNumber(30)); 
}
}

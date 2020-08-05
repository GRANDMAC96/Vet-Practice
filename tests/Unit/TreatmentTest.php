<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use App\Treatment;

class TreatmentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testFromString()
    {
        // call the Treatment::fromString static method
        $result = Treatment::fromString("Test");

        // test no duplicates
        $allTreatments = Treatment::where("name", "Test"); 
        $this->assertSame(1, $allTreatments->count());

        // check we get back a Treatment
        // using assertInstanceOf to check the class 
        $this->assertInstanceOf(Treatment::class, $result);

        // check the treatment has the right name
        $this->assertSame("Test", $result->name);

        // get the first treatment from the database
        $treatmentFromDB = Treatment::all()->first(); 
        
        // check we get a treatment
        $this->assertInstanceOf(Treatment::class, $treatmentFromDB); 
        
        // check it's got the right name
        $this->assertSame("Test", $treatmentFromDB->name);
    }
    public function testFromStrings()
    {
        // call the fromStrings method
        $result = Treatment::fromStrings(["Test", "Hammock"]);

        // check it's a Collection
        $this->assertInstanceOf(Collection::class, $result); 
        
        // check the first item is "Test"
        $this->assertSame("Test", $result[0]->name);

        // / check the second item is "Hammock"
        $this->assertSame("Hammock", $result[1]->name);
    }
}

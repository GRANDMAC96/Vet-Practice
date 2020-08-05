<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        // add an owner to the database
        Owner::create([
            "first_name" => "Henry",
            "last_name" => "Mac",
            "address_1" => "dsg",
            "address_2" => "Maadsfc",
            "town" => "Bristol",
            "postcode" => "BS6 89I",
            "telephone" => "07766553745",
        ]);

        // get the first owner back from the database
        $ownerFromDB = Owner::all()->first();
        // check the values match
        $this->assertSame("Henry", $ownerFromDB->first_name);
    }

    public function testFillabble()
    {
        $owner = new Owner([
            "first_name" => "Jack",
            "last_name" => "Polinski",
            "address_1" => "jkdfdsf",
            "address_2" => "dsf",
            "town" => "Bristol",
            "postcode" => "BSI 78U",
            "telephone" => "07766554473",
        ]);

        // first_name should be set, as it's in $fillable
        $this->assertTrue($owner->first_name === "Jack");
        
        $this->assertTrue($owner->last_name === "Polinski");
        $this->assertTrue($owner->address_1 === "jkdfdsf");
        $this->assertTrue($owner->address_2 === "dsf");
        $this->assertTrue($owner->town === "Bristol");
        $this->assertTrue($owner->postcode === "BSI 78U");
        $this->assertTrue($owner->telephone === "07766554473");
        $this->assertSame(null, $owner->danger);
    }

    public function testvalidPhoneNumber()
    {
        $owner = new Owner([
            "first_name" => "Jack",
            "last_name" => "Polinski",
            "address_1" => "jkdfdsf",
            "address_2" => "dsf",
            "town" => "Bristol",
            "postcode" => "BSI 78U",
            "telephone" => "07766554473",
        ]);
        // test if phone number valid
        $this->assertTrue($owner->telephone === "07766554473");


        $owner1 = new Owner([
            "first_name" => "Jack",
            "last_name" => "Polinski",
            "address_1" => "jkdfdsf",
            "address_2" => "dsf",
            "town" => "Bristol",
            "postcode" => "BSI 78U",
            "telephone" => "07766554682",
        ]);
        // test if phone number valid
        $this->assertTrue($owner1->telephone === "07766554682");

        $owner2 = new Owner([
            "first_name" => "Jack",
            "last_name" => "Polinski",
            "address_1" => "jkdfdsf",
            "address_2" => "dsf",
            "town" => "Bristol",
            "postcode" => "BSI 78U",
            "telephone" => "07766554473",
        ]);
        // test if phone number valid
        $this->assertTrue($owner2->telephone === "07766554473");
        $owner3 = new Owner([
            "first_name" => "Jack",
            "last_name" => "Polinski",
            "address_1" => "jkdfdsf",
            "address_2" => "dsf",
            "town" => "Bristol",
            "postcode" => "BSI 78U",
            "telephone" => "07766554473",
        ]);
        // test if phone number valid
        $this->assertTrue($owner3->telephone === "07766554473");
        $owner4 = new Owner([
            "first_name" => "Jack",
            "last_name" => "Polinski",
            "address_1" => "jkdfdsf",
            "address_2" => "dsf",
            "town" => "Bristol",
            "postcode" => "BSI 78U",
            "telephone" => "07766554473",
        ]);
        // test if phone number valid
        $this->assertTrue($owner4->telephone === "07766554473");
        
    }
    // public function testNumberOfPets()
    // {
    //     $owner = new Owner::create([
            
    //     ])
    // }
}

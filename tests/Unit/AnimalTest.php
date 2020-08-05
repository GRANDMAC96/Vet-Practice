<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Animal;

class AnimalTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDangerous()
    {
        $animal1 = new Animal([
            "name" => "Zood",
            "species" => "dog",
            "date_of_birth" => "1998_04_05",
            "weight" => "3",
            "height" => "4",
            "biteyness" => "1", 
            "owner_id" => "2"
        ]);
        $this->assertSame(null, $animal1->dangerous());

        $animal2 = new Animal([
            "name" => "Charles",
            "species" => "dog",
            "date_of_birth" => "1998_04_05",
            "weight" => "3",
            "height" => "4",
            "biteyness" => "2", 
            "owner_id" => "2"
        ]);
        $this->assertSame(null, $animal2->dangerous());

        $animal3 = new Animal([
            "name" => "Ana",
            "species" => "dog",
            "date_of_birth" => "1998_04_05",
            "weight" => "3",
            "height" => "4",
            "biteyness" => "3", 
            "owner_id" => "2"
        ]);
        $this->assertSame(null, $animal3->dangerous());

        $animal4 = new Animal([
            "name" => "Pole",
            "species" => "dog",
            "date_of_birth" => "1998_04_05",
            "weight" => "3",
            "height" => "4",
            "biteyness" => "4", 
            "owner_id" => "2"
        ]);
        $this->assertSame("Animal bites", $animal4->dangerous());

        $animal5 = new Animal([
            "name" => "chris",
            "species" => "dog",
            "date_of_birth" => "1998_04_05",
            "weight" => "3",
            "height" => "4",
            "biteyness" => "5", 
            "owner_id" => "2"
        ]);
        $this->assertSame("Animal bites", $animal5->dangerous());
    }
}

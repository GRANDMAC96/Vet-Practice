<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('species', 100);
            $table->date('date_of_birth');
            $table->float('weight', 10);
            $table->float('height', 10);
            $table->integer('biteyness')->unsigned();
            $table->timestamps();
            
            // create the owner_id column
            $table->foreignId("owner_id")->unsigned();
            // set up the foreign key constraint
            // this tells MySQL that the animal_id column
            // references the id column on the animals table // we also want MySQL to automatically remove any // comments linked to animals that are deleted 
            $table->foreign("owner_id")->references("id")->on("owners")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('animals_owner_id_foreign');
        $table->dropColumn("owner_id");
    }
}

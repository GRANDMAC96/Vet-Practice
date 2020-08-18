<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('address_1', 100);
            $table->string('address_2', 100);
            $table->string('town', 100);
            $table->string('postcode');
            $table->string('telephone', 30);
            $table->timestamps();

            // laravels syntax for foreign key constraint. It allows the deletion of associated owners when a user is deleted.
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}

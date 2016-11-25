<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->integer('kode_a');
            $table->integer('kode_b');
            $table->integer('kode_c');
            $table->integer('kode_d');
            $table->integer('kode_e');

            // Make composite key
            $table->primary(['kode_a', 'kode_b', 'kode_c', 'kode_d', 'kode_e']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}

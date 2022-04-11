<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('description', 250);
<<<<<<< HEAD
            $table->integer('price')->nullable();
=======
            $table->integer('price');
>>>>>>> 9df0ea72370a8765b206ec27fd21a19cc6045547
            $table->string('image', 255)->nullable();
            $table->date('date');
            $table->time('time');
            $table->integer('capacity');
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};

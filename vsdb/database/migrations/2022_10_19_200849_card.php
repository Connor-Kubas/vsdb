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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('subname', 30);
            $table->string('type', 20);
            $table->integer('rank');
            $table->integer('attack');
            $table->integer('defense');
            $table->boolean('flight');
            $table->boolean('range');
            $table->string('power', 500);
            $table->string('publisher', 10);
            $table->string('artist', 30);
            $table->string('card_number');
            $table->string('flavor_text', 200);
            $table->string('keywords', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
};

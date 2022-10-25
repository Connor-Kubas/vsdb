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
            $table->string('title', 30);
            $table->string('version', 30)->default('');
            $table->string('power', 500)->default('');
            $table->string('type', 20);
            $table->integer('cost');
            $table->integer('attack');
            $table->integer('defense');
            $table->string('affiliation', 50)->default('');
            $table->boolean('flight')->default('0');
            $table->boolean('range')->default('0');
            $table->string('mutant', 45)->default('');
            $table->string('visible', 45)->default('');
            // $table->string('publisher', 10)->default('');
            // $table->string('artist', 30)->default('');
            // $table->string('card_number')->default('');
            // $table->string('flavor_text', 200)->default('');
            // $table->string('keywords', 30)->default('');
            // $table->timestamps();
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

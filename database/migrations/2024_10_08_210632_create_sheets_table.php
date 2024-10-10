<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('character_id');
            $table->string('name',50);
            $table->string('class',25);
            $table->string('race',30);
            $table->integer('cp');
            $table->integer('lvl');
            $table->integer('reputation');
            $table->string('antecedent',30);
            $table->boolean('inspiration');
            $table->integer('STR');
            $table->integer('DEX');
            $table->integer('CON');
            $table->integer('INT');
            $table->integer('WSD');
            $table->integer('CAR');
            $table->integer('armor');
            $table->integer('initiave');
            $table->integer('displacement');
            $table->integer('HP');
            $table->integer('MP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheets');
    }
};

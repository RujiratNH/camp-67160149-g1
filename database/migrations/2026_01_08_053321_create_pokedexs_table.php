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
        Schema::create('pokedexes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('species');
            $table->decimal('height', 5, 1);
            $table->decimal('weight', 5, 1);
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokedexes');
    }
};

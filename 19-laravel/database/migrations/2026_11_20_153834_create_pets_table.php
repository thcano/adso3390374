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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')
                ->default('no-image.webp');
            $table->string('kind');
            $table->double('weight');
            $table->tinyInteger('age');
            $table->string('breed');
            $table->string('location');
            $table->string('description');
            $table->boolean('is_active')->default(1);
            $table->boolean('is_adopted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};

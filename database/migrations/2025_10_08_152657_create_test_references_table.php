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
        Schema::create('test_references', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_type_id')->constrained('test_types');
            $table->string('value');
            $table->integer('normal_min')->nullable();
            $table->integer('normal_max')->nullable();
            $table->integer('high')->nullable();
            $table->integer('very_high')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_references');
    }
};

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
        Schema::create('argots', function (Blueprint $table) {
            $table->id();
            $table->string('mot');
            $table->year('decenie')->nullable();
            $table->text('signification');
            $table->boolean('actuel')->default(false);
            $table->string('ville');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('argots');
    }
};

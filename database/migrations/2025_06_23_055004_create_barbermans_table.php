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
        Schema::create('barbermans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('genders_id')->references('id')->on('genders')->onDelete('cascade');
            $table->integer('price')->default(0);
            $table->foreignId('services_id')->references('id')->on('services')->onDelete('cascade');
            $table->integer('rating')->default(0);
            $table->integer('no_hp')->unique();
            $table->string('email')->unique();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barbermans');
    }
};

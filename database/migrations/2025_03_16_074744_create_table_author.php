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
        Schema::create('authors', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key column named 'id'
            $table->string('name'); // Column to store the author's name
            $table->string('email')->unique()->nullable(); // Column for email, should be unique, can be null
            $table->timestamps(); // Automatically creates 'created_at' and 'updated_at' columns
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};

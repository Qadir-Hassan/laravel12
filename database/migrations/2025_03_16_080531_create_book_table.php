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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key column named 'id'
            $table->string('title'); // Column to store the book's title
            $table->text('description')->nullable(); // Column for a longer description, can be null
            $table->unsignedBigInteger('author_id'); // Foreign key column referencing the authors table
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade'); // Optional: Define behavior on delete

        
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};

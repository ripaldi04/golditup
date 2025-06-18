<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_path')->nullable();
            $table->foreignId('category_contents_id')->constrained()->onDelete('cascade');
            $table->string('release_year');
            $table->string('author');
            $table->string('detail_header');
            $table->text('detail_deskripsi');
            $table->string('image_book1');
            $table->string('image_book2');
            $table->string('image_book3');
            $table->text('buying_guide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

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
        Schema::create('event_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_path')->nullable();
            $table->foreignId('category_contents_id')->constrained()->onDelete('cascade');
            $table->date('event_date');
            $table->integer('total_quota');
            $table->string('detail_header');
            $table->text('detail_deskripsi');
            $table->text('buying_guide');
            $table->string('preview_event');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

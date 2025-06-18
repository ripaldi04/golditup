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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('banner1');
            $table->string('banner2');
            $table->string('header_banner1');
            $table->string('deskripsi_banner1');
            $table->string('header_banner2');
            $table->string('deskripsi_banner2');
            $table->string('youtube_preview');
            $table->string('header_preview');
            $table->string('deskripsi_preview');
            $table->string('header_copywriting1');
            $table->string('deskripsi_copywriting1');
            $table->string('header_point1');
            $table->string('deskripsi_point1');
            $table->string('header_point2');
            $table->string('deskripsi_point2');
            $table->string('header_point3');
            $table->string('deskripsi_point3');
            $table->string('header_point4');
            $table->string('deskripsi_point4');
            $table->string('header_copywriting2');
            $table->string('deskripsi_copywriting2');
            $table->string('card_header1');
            $table->string('card_deskripsi1');
            $table->string('card_header2');
            $table->string('card_deskripsi2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};

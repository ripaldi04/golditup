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
        Schema::create('aboutus_pages', function (Blueprint $table) {
            $table->id();
            $table->string('header1');
            $table->string('deskripsi1');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');
            $table->string('header2');
            $table->string('header_point1');
            $table->string('deskripsi_point1');
            $table->string('header_point2');
            $table->string('deskripsi_point2');
            $table->string('header_point3');
            $table->string('deskripsi_point3');
            $table->string('header_point4');
            $table->string('deskripsi_point4');
            $table->string('header_point5');
            $table->string('deskripsi_point5');
            $table->string('header3');
            $table->string('card1');
            $table->string('title1');
            $table->string('deskripsi_card1');
            $table->string('card2');
            $table->string('title2');
            $table->string('deskripsi_card2');
            $table->string('card3');
            $table->string('title3');
            $table->string('deskripsi_card3');
            $table->string('card4');
            $table->string('title4');
            $table->string('deskripsi_card4');
            $table->string('card5');
            $table->string('title5');
            $table->string('deskripsi_card5');
            $table->string('card6');
            $table->string('title6');
            $table->string('deskripsi_card6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutus_pages');
    }
};

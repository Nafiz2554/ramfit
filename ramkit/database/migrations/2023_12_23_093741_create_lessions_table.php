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
        Schema::create('lessions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url1');
            $table->string('url2');
            $table->string('img_1');
            $table->string('img_2');
            $table->string('pdf1name');
            $table->string('pdf1file_name');
            $table->string('pdf1file_path');
            $table->string('pdf2name');
            $table->string('pdf2file_name');
            $table->string('pdf2file_path');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessions');
    }
};

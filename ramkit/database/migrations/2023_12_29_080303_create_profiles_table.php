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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('cover_img');
            $table->string('profile_img');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('phone');
            $table->string('gender');
            $table->string('college');
            $table->string('session');
            $table->string('city');
            $table->string('position');
            $table->string('address');
            $table->string('bio');
            $table->string('website');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

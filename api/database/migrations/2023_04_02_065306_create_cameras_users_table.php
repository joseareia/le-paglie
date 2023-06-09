<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('camera_user', function (Blueprint $table) {
            $table->unsignedBigInteger('camera_id');
                $table->foreign('camera_id')->references('id')->on('cameras')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('camera_user');
    }
};

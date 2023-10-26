<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('post_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('color', 7);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_categories');
    }
};

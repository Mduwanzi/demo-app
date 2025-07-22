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
        Schema::create('ordernows', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('first_name');
            $table->String('last_name');
            $table->String('email');
            $table->String('phone');
            $table->String('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordernows');
    }
};

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
        Schema::create('console_vinyl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('console_id');
            $table->foreign('console_id')->references('id')->on('consoles');
            $table->unsignedBigInteger('vinyl_id');
            $table->foreign('vinyl_id')->references('id')->on('vinyls');
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('console_vinyl');
    }
};

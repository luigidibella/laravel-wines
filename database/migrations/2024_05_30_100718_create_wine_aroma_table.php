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
        Schema::create('wine_aroma', function (Blueprint $table) {
            $table->unsignedBigInteger('wine_id');
            // foreign key constraint
            $table->foreign('wine_id')->references('id')->on('wines')->onDelete('cascade');

            $table->unsignedBigInteger('aroma_id');
            // foreign key constraint
            $table->foreign('aroma_id')->references('id')->on('aromas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wine_aroma');
    }
};

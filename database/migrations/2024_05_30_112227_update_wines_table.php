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
        Schema::table('wines', function (Blueprint $table) {
            $table->unsignedBigInteger('aroma_id')->nullable()->after('id');
            $table->foreign('aroma_id')->references('id')->on('aromas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wines', function (Blueprint $table) {
            $table->dropForeign(['aroma_id']);
            $table->dropColumn('aroma_id');
        });
    }
};

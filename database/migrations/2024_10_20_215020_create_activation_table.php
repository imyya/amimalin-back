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
        Schema::table('activation', function (Blueprint $table) {
            // $table->id();
            // $table->tinyInteger('status')->default(0);
            // $table->string('description');
            // $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Schema::dropIfExists('activation');
    }
};

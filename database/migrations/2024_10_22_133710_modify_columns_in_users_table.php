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
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->unique()->change();
            $table->string('password')->nullable(false)->change(); // Colonne password existante
            $table->string('title', 20)->nullable(false)->change(); // Colonne title existante
            $table->string('firstName', 30)->nullable(false)->change(); // Colonne firstName existante
            $table->string('lastName', 30)->nullable(false)->change(); // Colonne lastName existante
            $table->string('phone', 20)->nullable(false)->change(); // Colonne phone existante
            $table->float('latitude')->nullable(false)->change();
            $table->float('longitude')->nullable(false)->change();
            $table->date('birthday')->nullable()->change();
            $table->integer('jobTypeId')->nullable()->change();
            $table->tinyInteger('registrationType')->nullable()->change();
            $table->integer('isDogsitter')->nullable()->change();
            $table->integer('isPremiumDogsitter')->nullable()->change();
            $table->dateTime('creationDate')->nullable()->change();
            $table->date('lastLoginDate')->nullable()->change();
            $table->mediumText('internalNotes')->nullable()->change();
            $table->integer('activation')->nullable()->change();
            $table->string('gclid', 100)->nullable()->change();
            $table->string('cid', 100)->nullable()->change();
            $table->string('sessionId', 100)->nullable()->change();
            $table->integer('activation_id')->nullable()->change();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password', 128)->nullable(true)->change(); // Colonne password existante
            $table->string('title', 20)->nullable(true)->change(); // Colonne title existante
            $table->string('firstName', 30)->nullable(true)->change(); // Colonne firstName existante
            $table->string('lastName', 30)->nullable(true)->change(); // Colonne lastName existante
            $table->string('phone', 20)->nullable(true)->change(); // Colonne phone existante
            $table->float('latitude')->nullable(false)->change();
            $table->float('longitude')->nullable(false)->change();
            $table->date('birthday')->nullable(false)->change();
            $table->integer('jobTypeId')->nullable(false)->change();
            $table->tinyInteger('registrationType')->nullable(false)->change();
            $table->integer('isDogsitter')->nullable(false)->change();
            $table->integer('isPremiumDogsitter')->nullable(false)->change();
            $table->dateTime('creationDate')->nullable(false)->change();
            $table->date('lastLoginDate')->nullable(false)->change();
            $table->mediumText('internalNotes')->nullable(false)->change();
            $table->integer('activation')->nullable(false)->change();
            $table->string('gclid', 100)->nullable(false)->change();
            $table->string('cid', 100)->nullable(false)->change();
            $table->string('sessionId', 100)->nullable(false)->change();
            $table->integer('activation_id')->nullable(false)->change();
        });
    }
};


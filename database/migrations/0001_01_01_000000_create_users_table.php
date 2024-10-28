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
          //  $table->id();
           // $table->string('name');
            //table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            
            // $table->string('email', 100)->nullable(); // Colonne email existante
            // $table->string('username', 100)->nullable(); // Colonne username existante
            // $table->string('password', 128)->nullable(); // Colonne password existante
            // $table->string('picturePath', 200)->nullable(); // Colonne picturePath existante
            // $table->string('title', 20)->nullable(); // Colonne title existante
            // $table->string('firstName', 30)->nullable(); // Colonne firstName existante
            // $table->string('lastName', 30)->nullable(); // Colonne lastName existante
            // $table->float('latitude')->nullable(); // Colonne latitude existante
            // $table->float('longitude')->nullable(); // Colonne longitude existante
            // $table->string('phone', 20)->nullable(); // Colonne phone existante
            // $table->string('phone2', 20)->nullable(); // Colonne phone2 existante
            // $table->date('birthday'); // Colonne birthday existante
            // $table->integer('jobTypeId'); // Colonne jobTypeId existante
            // $table->mediumText('presentation')->nullable(); // Colonne presentation existante
            // $table->integer('nbChildren')->nullable(); // Colonne nbChildren existante
            // $table->tinyInteger('registrationType'); // Colonne registrationType existante
            // $table->integer('isDogsitter'); // Colonne isDogsitter existante
            // $table->integer('isPremiumDogsitter'); // Colonne isPremiumDogsitter existante
            // $table->dateTime('creationDate'); // Colonne creationDate existante
            // $table->date('lastLoginDate'); // Colonne lastLoginDate existante
            // $table->mediumText('internalNotes'); // Colonne internalNotes existante
            // $table->string('token', 500)->nullable(); // Colonne token existante
            // $table->integer('activation'); // Colonne activation existante
            // $table->string('gclid', 100)->default(''); // Colonne gclid existante
            // $table->string('cid', 100)->default(''); // Colonne cid existante
          //  $table->integer('activation_id'); // Colonne activation_id existante
           // $table->foreignId('activation_id')->constrained(table: 'activation');
        });

        // Schema::table('password_reset_tokens', function (Blueprint $table) {
        //     $table->string('email')->primary();
        //     $table->string('token');
        //     $table->timestamp('created_at')->nullable();
        // });

        Schema::table('sessions', function (Blueprint $table) {
            // $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

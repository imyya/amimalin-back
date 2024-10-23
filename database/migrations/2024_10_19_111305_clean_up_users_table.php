<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log; // Ajout de l'importation


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->where('birthday', '0000-00-00')->update(['birthday' => null]);
        DB::table('users')->where('creationDate', '0000-00-00 00:00:00')->update(['creationDate' => null]);
        DB::table('users')->where('lastLoginDate', '0000-00-00')->update(['lastLoginDate' => null]);
        // Ajout des valeurs par défaut pour les colonnes à nullable(false)
        DB::table('users')->whereNull('password')->update(['password' => 'default_password']);
        DB::table('users')->whereNull('title')->update(['title' => 'Default Title']);
        DB::table('users')->whereNull('firstName')->update(['firstName' => 'Default First Name']);
        DB::table('users')->whereNull('lastName')->update(['lastName' => 'Default Last Name']);
        DB::table('users')->whereNull('phone')->update(['phone' => '000-000-0000']);
        DB::table('users')->whereNull('latitude')->update(['latitude' => 0.0]);
        DB::table('users')->whereNull('longitude')->update(['longitude' => 0.0]);

    // DB::table('users')->where('birthday', '0000-00-00')->update(['birthday' => null]);
    // DB::table('users')->where('creationDate', '0000-00-00 00:00:00')->update(['creationDate' => null]);
    // DB::table('users')->where('lastLoginDate', '0000-00-00')->update(['lastLoginDate' => null]);
    
    // // Ajout des valeurs par défaut
    // $updatedRows = DB::table('users')->whereNull('password')->update(['password' => 'default_password']);
    //  Log::info("Updated rows for password: " . $updatedRows);
    
    // $updatedRows = DB::table('users')->whereNull('title')->update(['title' => 'Default Title']);
    //  Log::info("Updated rows for title: " . $updatedRows);
    
    // $updatedRows = DB::table('users')->whereNull('firstName')->update(['firstName' => 'Default First Name']);
    //  Log::info("Updated rows for firstName: " . $updatedRows);
    
    // $updatedRows = DB::table('users')->whereNull('lastName')->update(['lastName' => 'Default Last Name']);
    //  Log::info("Updated rows for lastName: " . $updatedRows);
    
    // $updatedRows = DB::table('users')->whereNull('phone')->update(['phone' => '000-000-0000']);
    //  Log::info("Updated rows for phone: " . $updatedRows);
    
    // $updatedRows = DB::table('users')->whereNull('latitude')->update(['latitude' => 0.0]);
    // Log::info("Updated rows for latitude: " . $updatedRows);
    
    // $updatedRows = DB::table('users')->whereNull('longitude')->update(['longitude' => 0.0]);
    // Log::info("Updated rows for longitude: " . $updatedRows);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

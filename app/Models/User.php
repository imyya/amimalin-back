<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    // protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'latitude',
        'longitude',
        'phone',
        'firstname',
        'lastname',
        'birthday',
        'phone2',
        'name'

        // 'birthday',   // Make sure 'birthday' is included here
        // 'jobTypeId',
        // 'presentation',
        // 'registrationType',
        // 'isDogsitter',
        // 'isPremiumDogsitter',
        // 'creationDate',
        // 'lastLoginDate',
        // 'internalNotes',
        // 'activation',
        // 'gclid',
        // 'cid',
        // 'sessionId',
        // 'activation_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            //'password' => 'hashed',
        ];
    }

    // public function getJWTIdentifier()
    // {
    //     return $this->getKey();
    // }

    // /**
    //  * Return a key-value array, which will be encoded in the JWT payload.
    //  *
    //  * @return array
    //  */
    // public function getJWTCustomClaims()
    // {
    //     return [];
    // }
}

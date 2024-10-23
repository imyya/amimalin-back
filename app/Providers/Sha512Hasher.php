<?php

namespace App\Providers;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use RuntimeException;

class Sha512Hasher implements HasherContract
{
    // public function make($value, array $options = [])
    //     {
    //         return hash('sha512', $value);
    //     }

    //     public function check($value, $hashedValue, array $options = [])
    //     {
    //         return hash('sha512', $value) === $hashedValue;
    //     }

    //     public function needsRehash($hashedValue, array $options = [])
    //     {
    //         return false; // SHA-512 ne nécessite pas de rehashing
    //     }

    //     public function info($hashedValue)
    //     {
    //         return [
    //             'driver' => 'sha512',
    //             'hash_algorithm' => 'sha512',
    //         ];
    //     }


    protected $verifyAlgorithm = false;

    public function __construct(array $options = [])
    {
        $this->verifyAlgorithm = $options['verify'] ?? $this->verifyAlgorithm;
    }

    public function info($hashedValue)
    {
        return [
            'algo' => null,
            'algoName' => 'sha512',
            'options' => []
        ];
    }

    public function make($value, array $options = [])

    {  
        return hash('sha512', $value);
    }

    public function check($value, $hashedValue, array $options = [])
    {
        if ($this->verifyAlgorithm && $this->info($hashedValue)['algoName'] !== 'sha512') {
            throw new RuntimeException('This password does not use the Sha512 algorithm.');
        }

        // return self::make($value) === $hashedValue;
        return $this->make($value) === $hashedValue;

    }

    public function needsRehash($hashedValue, array $options = [])
    {
        return false;
    }
}

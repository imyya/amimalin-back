<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Providers\Sha512Hasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Contracts\Providers\JWT;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller

{
//     public function __construct()
// {
//     $this->middleware('auth:api', ['except' => ['login', 'register']]);
// }

    public function login(LoginRequest $request)
    {
        // Validation des données de la requête
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Chercher l'utilisateur par email
        if ($user && app(Sha512Hasher::class)->check($request->password, $user->password)) {
            // Authentification réussie
            $token = JWTAuth::fromUser($user);
            return response([
                'ok' => true,
                'data' => UserResource::make($user),
                'message'=> 'User logged in successfully',
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        }

        return response([
            'ok' => false,
            'data' => null,
            'message' => 'Invalid credentials',
        ], Response::HTTP_UNAUTHORIZED);
    }

    public function register(RegisterRequest $request){
        // $request->validate([
        //     // 'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6',
        // ]);

        $existingUser = User::where('email', $request->email)->first();
        // dd($existingUser);

        if ($existingUser) {
            return response()->json([
                'status' => 'error',
                'message' => 'Email already exists',
            ], 400);
        }
        $hashedPassword = app(Sha512Hasher::class)->make($request->password);
         //dd($hashedPassword);

         //dd($request);
        $user = User::create([
            'latitude' => $request->latitude,
            'email' => $request->email,
            'password' => $hashedPassword, // Hash the password
            'longitude' => $request->longitude,
            'title' => $request->title,
            'firstname' => $request->firstname,
            'lastname'=>$request->lastname
            // 'birthday' => $request->birthday,
            // 'jobTypeId' => $request->jobTypeId,
            // 'presentation' => $request->presentation,
            // 'registrationType' => $request->registrationType,
            // 'isDogsitter' => $request->isDogsitter,
            // 'isPremiumDogsitter' => $request->isPremiumDogsitter,
            // 'creationDate' => $request->creationDate,
            // 'lastLoginDate' => $request->lastLoginDate,
            // 'internalNotes' => $request->internalNotes,
            // 'activation' => $request->activation,
            // 'gclid' => $request->gclid,
            // 'cid' => $request->cid,
            // 'sessionId' => $request->sessionId,
            // 'activation_id' => $request->activation_id,

        ]);

        $token = JWTAuth::fromUser($user);
        return response()->json([
            'ok' => true,
            'message' => 'User created successfully',
            'data' => UserResource::make($user),
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return response()->json([
            'ok' => 'true',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'ok' => true,
            'data' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}

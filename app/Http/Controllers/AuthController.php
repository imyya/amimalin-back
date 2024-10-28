<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Providers\Sha512Hasher;
use App\View\Components\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use RealRashid\SweetAlert\SweetAlertServiceProvider;


class AuthController extends Controller

{
    //     public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login', 'register']]);
    // }

    public function showLoginForm()
    {
        return view('components.login');
    }

    public function showRegisterForm()
    {
        return view('components.register');
    }

    public function login(Loginrequest $request)
    {


        try {
            // Chercher l'utilisateur par email
            $user = User::where('email', $request->email)->first();

            if ($user && app(Sha512Hasher::class)->check($request->password, $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();

                return redirect()->route('home')->with('success', 'Vous êtes connecté');
            }

            // Alert::toast('Email ou mot de passe incorrect.', 'error')->position('top-end');

            return redirect('login')->withErrors([
                'error' => 'Email ou mot de passe incorrect',
            ])->withInput();
        } catch (\Exception $e) {
            // \Log::error('Login error: ' . $e->getMessage());

            return back()->withErrors([
                'error' => 'Une erreur est survenue lors de la tentative de connexion. Veuillez réessayer plus tard.',
            ])->withInput();
        }




        // Authentification réussie
        // $token = JWTAuth::fromUser($user);
        // return response()->json([
        //     'ok' => true,
        //     'data' => UserResource::make($user),
        //     'message'=> 'User logged in successfully',
        //     'authorisation' => [
        //         'token' => $token,
        //         'type' => 'bearer',
        //     ]
        // ]);


        // return response([
        //     'ok' => false,
        //     'data' => null,
        //     'message' => 'Invalid credentials',
        // ], Response::HTTP_UNAUTHORIZED);
    }

    public function register(RegisterRequest $request)
    {
        try {

            $content = $request->all();
            $existingUser = User::where('email', $content['email'])->first();

            if ($existingUser) {


                return back()->withErrors([
                    'email' => 'Cet email est déjà utilisé',
                ])->withInput();
            }

            $hashedPassword = app(Sha512Hasher::class)->make($content['password']->password);
            $user = User::create([
                'latitude' => $content['latitude'],
                'email' => $content['email'],
                'password' => $hashedPassword, // Hash the password
                'longitude' => $content['longitude'],
                'latitude' => $content['latitude'],
                'title' => $content['title'],
                'firstname' => $content['firstname'],
                'lastname' => $content['lastname'],
                'name' => $content['firstname'] . ' ' . $content['lastname'],
            
            ]);
        } catch (\Exception $e) {

        }



        //dd($hashedPassword);

        //dd($request);


        // $token = JWTAuth::fromUser($user);
        // return response()->json([
        //     'ok' => true,
        //     'message' => 'User created successfully',
        //     'data' => UserResource::make($user),
        //     'authorisation' => [
        //         'token' => $token,
        //         'type' => 'bearer',
        //     ]
        // ]);
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

<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return [
            'ok'=>true,
            'message' => 'List of all users',
            'data' => UserResource::collection($users)
        ];
    }
}

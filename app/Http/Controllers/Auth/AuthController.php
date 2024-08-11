<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message'  => "This user does not exists with us",
            ], 401);
        }   

        $token = $user->createToken('auth_token')->plainTextToken;
                            
        return response([
            'message' => "success",
            "user"    => $user,
            "token"   => $token
        ]);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //buat validasi regis
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //buat token
        $token = $user->createToken('api-token')->plainTextToken;
        //buat pesan api
        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 201);
    }
}

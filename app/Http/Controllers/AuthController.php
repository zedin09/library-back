<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'data' => $user,
            'access_token' => $token
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws AuthenticationException
     */
    public function login(Request $request): JsonResponse
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            throw new AuthenticationException();
        }
        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'data' => $user,
            'access_token' => $token
        ]);
    }

    /**
     * @return void
     */
    public function logout()
    {
        auth()->user()->tokens()->delete();
    }
}

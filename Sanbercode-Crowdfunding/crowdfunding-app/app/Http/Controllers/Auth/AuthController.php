<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'email' => $request['email'],
            'name' => $request['name'],
            'password' => Hash::make($request->password)

        ]);

        $data['user'] = $user;

        return response()->json([
            'response_code' => '200',
            'response_message' => 'User berhasil di register',
            'data' => $data,
        ]);
    }
}

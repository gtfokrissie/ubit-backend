<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use JWTAuth;
use App\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request) {
        $validation = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validation->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => $validation->errors()
            ], 400);
        }

        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'email atau password anda salah'
                ], 400);
            }
        } catch (JWTException $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'token tidak diperoleh'
            ], 500);
        }

        $user = Auth::user();
        return response()->json([
            'status' => 'success',
            'message' => 'login success',
            'data' => [
                'user' => $user,
                'token' => compact('token')
            ]
        ], 200);

    }

    public function register(Request $request) {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'username' => ['required', 'string', 'min:6'],
            'phone' => ['required'],
            'user_level' => ['required'],
            'user_account' => ['required'],
            'job' => ['required', 'string', 'max:255'],
            'job_location' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string']
        ]);

        if ($validation->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => $validation->errors()
            ], 400);
        }

        $check_user_email = User::where('email', $request->email)
                            ->first();

        if ($check_user_email) {
            return response()->json([
                'status' => 'failed',
                'message' => 'email ini sudah terdaftar'
            ], 400);
        }

        $check_user_username = User::where('username', $request->username)
                            ->first();

        if ($check_user_username) {
            return response()->json([
                'status' => 'failed',
                'message' => 'username sudah digunakan'
            ], 400);
        }
        
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'username' => $request['username'],
            'phone' => $request['phone'],
            'user_level' => $request['user_level'],
            'user_account' => $request['user_account'],
            'job' => $request['job'],
            'job_location' => $request['job_location'],
            'gender' => $request['gender']
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'user berhasil dibuat',
            'data' => $user
        ], 200);


    }
}

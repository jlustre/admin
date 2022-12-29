<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
// use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login(Request $request){

        try{

            if (Auth::attempt($request->only('email','password'))) {
                $user = Auth::user();
                $token = $user->createToken('app')->accessToken;

                return response([
                    'message' => "Successfully Login",
                    'token' => $token,
                    'user' => $user
                ],200); // States Code
            }

        }catch(Exception $exception){
            return response([
                'message' => $exception->getMessage()
            ],400);
        }
        return response([
            'message' => 'Invalid Email Or Password'
        ],401);

    } // end method

    public function Register(RegisterRequest $request){

        try{

            $user = User::create([
                'name' => $request->name,
                'sponsor' => $request->sponsor,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $token = $user->createToken('app')->accessToken;

            return response([
                'message' => "Registration Successfull",
                'token' => $token,
                'user' => $user
            ],200);

            }catch(Exception $exception){
                return response([
                    'message' => $exception->getMessage()
                ],400);
            }

    } // end mehtod
}
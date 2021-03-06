<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Arr;

class AuthController extends Controller
{
    public function create(Request $request){ 
        $array = ['error' => ''];

        $rules = [
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $array['error'] = $validator->messages();
            return $array;
        }

        $email = $request->input('email');
        $password = $request->input('password');

        $newUser = new User();
        $newUser->email = $email;
        $newUser->password = password_hash($password, PASSWORD_DEFAULT);
        $newUser->token = '';
        $newUser->save();

        return $array;
    }
    /*
    // AUTH COM SANCTUM
    public function login(Request $request){
        $array = ['error' => ''];

        $creds = $request->only('email', 'password');

        if (Auth::attempt($creds)) {
            
            $user = User::where('email', $creds['email'])->first();

            $item = time().rand(0,9999);
            $token = $user->createToken($item)->plainTextToken;
            
            $array['token'] = $token;
        } else {
            $array['error'] = "E-mail e/ou senha inválidos.";
        }

        return $array;
    }

    public function logout(Request $request) {
        $array = ['error' => ''];

        $user = $request->user();
        
        $user->tokens()->delete();

        return $array;
    }
    */

    // AUTH COM JWT
    public function login(Request $request){
        $array = ['error' => ''];
        
        $creds = $request->only('email', 'password');

        $token = Auth::attempt($creds);

        if ($token) {
            $array['token'] = $token;
        } else {
            $array['error'] = 'Email e/ou senha inválidos.';
        }

        return $array;
    }

    public function logout() {
        $array = ['error' => ''];

        Auth::logout();

        return $array;
    }
}

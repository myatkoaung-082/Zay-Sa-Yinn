<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function view_login(){
        return view('login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return response()->json(['status' => true, 'message' => 'Login success', 'errors' => '']);
            }

            return response()->json(['status' => false, 'message' => 'email or Password is Incorrect']);
        }
    }

    public function register(){
        return view('register');
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

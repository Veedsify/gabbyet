<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|sting'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user){
            if(!password_verify($request->password, $user->password))
            {
                return redirect()->back()->with("error","invalid email or password");
            }
            Auth::login($user);
            return redirect()->route("home")->with("success","User Logged in Successfully");
        }   else{
            return redirect()->back()->with("error","invalid email or password");

        }
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'fullname'=>'reuired|string|min:8',
            'password'=>'required|string'
        ]);
        $newUser = new User;
        $newUser->fullname=$request->fullname;
        $newUser->email=$request->email;
        $newUser->password= password_hash($request->password, PASSWORD_DEFAULT);
        $newUser->save();
        return redirect(route("login"))->with("success","User created successfully");
    }
}

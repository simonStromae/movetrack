<?php

namespace App\Http\Controllers\Nkd\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
//        $credentials = $request->only('username', 'password');
        $username = $request->username;
        $password = $request->password;
        $user = User::where('username', $username)->first();


        if(empty($user)){
            return redirect()->back()->withErrors(['name'=>'Les informations entrées sont incorrect']);
        }

        if (Auth::attempt(['username'=>$username, 'password'=>$password])) {
            return redirect()->route('backend.dashboard');
        }else{
            return redirect()->back()->withErrors(['name'=>'Les informations entrées sont incorrect']);
        }
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}

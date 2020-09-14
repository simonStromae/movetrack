<?php

namespace App\Http\Controllers\Stromae;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{

    public function showLinkRequestForm(){
        return view('auth.passwords.email');
    }

    public function validateEmailReset(Request $request){
        $request->validate([
            'username' => 'required|email'
        ]);

        if (!emailExist($request->username)){
            connectify('error', 'Email Erroné', 'l\'email entré n\'existe pas. Veuillez réessayer !');
            return redirect()->route('reset.email');
        }

        return redirect()->route('reset.password');

    }

    public function showResetForm(){
        return view('auth.passwords.reset');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'username' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        if (!emailExist($request->username)){
            connectify('error','Email erroné',  'l\'email entré n\'existe pas. Veuillez réessayez !');
            return redirect()->route('reset.password');
        }

        $user = User::where('username', $request->username)->firstOrFail();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }
}

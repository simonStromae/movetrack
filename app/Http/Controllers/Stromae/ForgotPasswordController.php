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
            return redirect()->route('reset.email')->withErrors(['username'=>'L\'email renseigné est incorrect ! Veuillez réessayer']);
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
            return redirect()->route('reset.password')->withErrors(['username'=>'L\'email renseigné est incorrect ! Veuillez réessayer']);
        }

        $user = User::where('username', $request->username)->firstOrFail();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }
}

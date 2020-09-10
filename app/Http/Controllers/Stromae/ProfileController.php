<?php

namespace App\Http\Controllers\Stromae;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function account(){
        return view ('auth.account');
    }
}

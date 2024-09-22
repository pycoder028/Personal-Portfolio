<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        return view("backend.auth.login");
    }

    public function forgot(Request $request){
        
        return view("backend.auth.forgot");
    }


}

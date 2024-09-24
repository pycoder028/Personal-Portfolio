<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Mail;
use App\Mail\ForgotPasswordMail;


class AuthController extends Controller
{
    public function login(Request $request){

    /*  $password = "admin123";
        $dd = Hash::make($password);
        dd($dd); */

        return view("backend.auth.login");
    }


    public function login_admin(Request $request){

        if(Auth::attempt(["email"=> $request->email,"password"=> $request->password],true)){
            if(!empty(Auth::User()->status)){
                if(Auth::User()->is_role == 1){
                    return redirect()->intended('admin/dashboard');
                }else{
                    return redirect('login')->with('error','Not Admin!');
                }
            }else{
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::findOrFail($user_id);

                return redirect('login')->with('success','This email is not varified yet!');
            }
        }else{
            return redirect()->back()->with('error','Please enter the corrent credentials');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url('login'));
    }
    
 

}

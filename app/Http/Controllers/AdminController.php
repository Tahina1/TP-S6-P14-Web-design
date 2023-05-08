<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //

    public function loginForm(){
        return view('login');
    }

    public function login(Request $request){
        $pseudo = $request->input('username');
        $password = $request->input('password');

        $admin = Admin::where('username',$pseudo)->where('password', $password)->first();
        if($admin){
            $request->session()->put('admin', $admin);
            return redirect('/');
        }
        return redirect('loginForm');
    }

    public function logout(Request $request){
        if ($request->session()->has('admin')) {
            // ...
            //$request->session()->forget('name');
            //remove all session()
            $request->session()->flush();
            return redirect('loginForm');
        }

    }


}

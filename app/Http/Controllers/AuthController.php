<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AuthController extends Controller
{
    //
    function Login(Request $request){

        $admin=Admin::where('email','=',$request->email)
            ->where('password', '=', $request->password)->first();

        if($admin!=null){
            $request->session()->put("admin", $admin);
            return redirect("/admin");
        }else{
            $request->session()->put("isUserValid", "yes");
            return redirect("/login");
        }

    }
}

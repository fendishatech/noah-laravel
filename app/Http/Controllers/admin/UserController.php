<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $req->validate([
            'phone_no' => 'required',
            'password' => 'required',
        ]);

        $user = User::where(['phone_no' => $req->phone_no])->first();

        if ($user && Hash::check($req->password, $user->password)) {
            // success
            $req->session()->put('user', $user);
            return redirect("/home");
        } else {
            return "Phone no or password is incorrect";
        }
    }
}

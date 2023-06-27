<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login()
    {
        validator(request()->all(), [
            'phone_no' => ['required'],
            'password' => ['required'],
        ])->validate();

        if (auth()->attempt(request()->only(['phone_no', 'password']))) {
            // success
            return redirect('/admin/home');
        } else {
            return redirect()->back()->withErrors(["email" => "Invalid credentials"]);
        }
    }

    function logout()
    {
        auth()->logout();
        return redirect('/admin');
    }
}

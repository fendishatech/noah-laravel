<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $req)
    {
        $member = Member::where(['phone_no' => $req->phone_no])->first();

        $validatedData = $req->validate([
            'phone_no' => ['required'],
            'password' => ['required']
        ]);

        if ($validatedData) {
            if ($member && Hash::check($req->password, $member->password)) {
                // success
                // Auth::login($user);
                return redirect("/home");
            } else {
                return redirect()->back()->withErrors([
                    'custom_error' => 'Wrong password or username!',
                ])->withInput();
            }
        } else {
            return redirect()->back()->withErrors("Wrong password or username!")->withInput();
        }
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|min:3|regex:/^[a-zA-Z]+$/',
            'father_name' => 'required|min:3|regex:/^[a-zA-Z]+$/',
            'phone_no' => 'required|min:10|max:15|regex:/^[0-9]+$/',
        ]);

        if ($validatedData) {

            $client = new Client();

            $client->first_name = $validatedData['first_name'];
            $client->father_name = $validatedData['father_name'];
            $client->phone_no = $validatedData['phone_no'];

            $client->save();

            return redirect('/auth/confirmation')->with('success', 'User added successfully.');
        } else {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }
    }

    public function getConfirmation()
    {
        return view('auth.confirm_register');
    }

    public function logout()
    {
        // Handle the logout process
    }
}

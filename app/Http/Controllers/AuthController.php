<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        ], [
            'phone_no.required' => 'ስልክ ቁጥር ባዶ ሊሆን አይችልም!',
            'password.required' => 'የይለፍ ቃል ባዶ ሊሆን አይችልም!'
        ]);

        if ($validatedData) {
            if ($member && Hash::check($req->password, $member->password)) {
                // success
                $req->session()->put('member', $member);
                return redirect("/");
            } else {
                return redirect()->back()->withErrors([
                    'custom_error' => 'ያስገቡት ስልክ ቁትር ወይም የይለፍ ቃል የተሳሳት ነው!',
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
            'phone_no' => 'required|min:10|max:15|regex:/^[0-9]+$/'
        ], [
            "first_name.required" => "ስም ባዶ ሊሆን አይችልም!",
            "first_name.min" => "ስም በትንሹ 3 ፊደላት ሊኖሩት ይገባል!",
            "first_name.regex" => "ስም ሊመሰረት የሚችለው በፊደል ብቻ ነው!",


            "father_name.required" => "የአባት ስም ባዶ ሊሆን አይችልም!",
            "father_name.min" => "የአባት ስም በትንሹ 3 ፊደላት ሊኖሩት ይገባል!",
            "father_name.regex" => "የአባት ስም ሊመሰረት የሚችለው በፊደል ብቻ ነው!",

            "phone_no.required" => "ስልክ ቁጥር ባዶ ሊሆን አይችልም!",
            "phone_no.min" => "ስልክ ቁጥር በትንሹ 10 ቁጥሮች ሊኖሩት ይገባል!",
            "phone_no.max" => "ስልክ ቁጥር ከ 15 ቁጥሮች በላይ ሊኖሩት አይችሉም!",
            "phone_no.regex" => "ስልክ ቁጥር ሊመሰረት የሚችለው በቁጥር ብቻ ነው!",
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
        Session::forget('member');
        return redirect('/');
    }
}

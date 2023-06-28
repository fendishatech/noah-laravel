<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function register(Client $client, Request $request)
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

            return redirect('/confirmation')->with('success', 'User added successfully.');
        } else {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address1' => 'required|max:255',
            'address2' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'postalcode' =>'required|numeric'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        
        User::create($validateData);

        $request->session()->flash('success', 'Registration Successfull! Please Login.');

        return redirect('/sign-up-success');
    }
}

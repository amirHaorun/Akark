<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function edit()
    {
        return view('profile.index');
    }
    public function update(Request $request)
    {
       $this->validate($request,
            [
                'email'=>[
                    Rule::unique('users')->ignore(auth()->id()),'email',
                ],
                'name' => [
                    'string','required','max:255'
                ],
                'phone'=>[
                        'required','max:13'
                ],
                'password' => [
                    'string','required','min:8','max:255','confirmed'
                ],

            ]
        );
        $request['password'] =  Hash::make($request['password']);

        auth()->user()->update($request->all());
        return back()->with('ProfileChanged','Your profile data has been updated successfully');
    }
}

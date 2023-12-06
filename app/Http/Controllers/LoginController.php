<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $formField = $request->validate([
            'email' => 'required', 'email', Rule::unique('users', 'email'),
            'password' => 'required',
        ]);

        if (auth()->attempt($formField)) {
            $request->session()->regenerate();
        }

        $user = User::where('email', $request->email)->first();

        if (empty($user)) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput(['email' => $request->email]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Wrong password! Try Agan'])->withInput(['email' => $request->email]);
        }

        return redirect('/')->with('message', 'You are now logged in Successfully!');
    }
}
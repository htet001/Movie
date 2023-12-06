<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $formField = $request->validate([
            'name' => 'required',
            'email' => 'required', 'email', Rule::unique('users', 'email'),
            'phone' => 'required|numeric|digits:11',
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
        $formField['password'] = bcrypt($formField['password']);
        $user = User::create($formField);
        auth()->login($user);
        return redirect('login')->with('register_success', 'Register Successfully! Please Login');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('logout');
    }
}

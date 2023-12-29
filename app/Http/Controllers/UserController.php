<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('userPage');
    }

    public function loginShow()
    {
        return view('auth.login');
    }

    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
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

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterFormRequest $request)
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

        return redirect('/');
    }
}
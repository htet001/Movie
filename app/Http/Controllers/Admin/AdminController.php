<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function showLogin()
    {
        return view('admin.auth.login');
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
        return redirect('/dashboard')->with('message', 'You are now logged in Successfully!');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

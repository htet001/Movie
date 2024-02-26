<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;

class UserController extends Controller
{
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

    public function profileUpdate()
    {
        return view('user.userPage');
    }

    public function notification()
    {
        $user = auth()->user();

        $datas = Booking::where('user_id', $user->id)->get();

        $bookingDetails = [];

        foreach ($datas as $data) {
            $currentGroup = $data->user->id . $data->movie->id . $data->room->id . $data->date . $data->time;

            if (!isset($bookingDetails[$currentGroup])) {
                $bookingDetails[$currentGroup] = [
                    'user' => $data->user,
                    'movie' => $data->movie,
                    'room' => $data->room,
                    'date' => $data->date,
                    'time' => $data->time,
                    'seats' => [],
                    'totalPrice' => 0,
                ];
            }

            $bookingDetails[$currentGroup]['seats'][] = $data->seat->name . $data->seat->count;
            $bookingDetails[$currentGroup]['totalPrice'] += $data->seat->price;
        }

        return view('user.notification', compact('bookingDetails'));
    }
}
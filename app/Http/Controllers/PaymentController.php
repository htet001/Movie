<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Models\SeatTimetable;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function subscribe()
    {
        if (request()->isMethod('post')) {

            $userId = auth()->id();

            try {
                User::where('id', $userId)->update(['is_admin' => 2]);

                return redirect()->route('premium')->with('success', 'User\'s admin status updated successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error updating user\'s admin status: ' . $e->getMessage());
            }
        }
    }

    public function createCheckoutSession(Request $request)
    {
        $userId = Auth::id();
        $userSelectedSeats = SeatTimetable::where('user_id', $userId)
            ->with('seat')
            ->get();

        $totalPrice = $userSelectedSeats->sum(function ($seatTimetable) {
            return $seatTimetable->seat->price;
        });
        $amount = $totalPrice * 100;

        $stripe = new \Stripe\StripeClient('sk_test_51O6oVWEBeZfFRhurWfEc9idLLEP6pHHOyqLf78SJOiChvXpy9yoKzzFXXUmfTl06qNSGcike4ww7YStNRlnOewU600nsolDbtH');

        $checkoutSession = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Total amount',
                    ],
                    'unit_amount' => $amount,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('checkout'),
        ]);

        return redirect($checkoutSession->url);
    }

    public function success()
    {
        return view('success');
    }
}
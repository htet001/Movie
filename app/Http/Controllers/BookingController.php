<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\Theater;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    {
        return view('booking');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
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

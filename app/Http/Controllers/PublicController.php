<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function createBooking()
    {
        return view('booking.form');
    }

    public function storeBooking(Request $request)
    {
        // Logika booking akan diimplementasikan nanti
        return back()->with('success', 'Booking berhasil diajukan.');
    }
}

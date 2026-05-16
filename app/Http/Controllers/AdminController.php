<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function bookings()
    {
        return view('admin.bookings');
    }

    public function approve($id)
    {
        return back()->with('success', 'Booking disetujui.');
    }

    public function uploadResults(Request $request)
    {
        return back()->with('success', 'Hasil diunggah.');
    }
}

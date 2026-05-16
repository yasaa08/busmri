<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrdController extends Controller
{
    public function index()
    {
        return view('hrd.dashboard');
    }

    public function history()
    {
        return view('hrd.history');
    }

    public function results()
    {
        return view('hrd.results');
    }

    public function exportExcel()
    {
        // Logika export akan diimplementasikan nanti
        return back()->with('success', 'Export dimulai.');
    }
}

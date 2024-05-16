<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexWarga()
    {
        return view('Warga');
    }

    public function indexRW()
    {
        return view('rukun_warga');
    }

    public function indexRT()
    {
        return view('rukun_tetangga');
    }
    public function index()
    {
        return view('home');
    }
}

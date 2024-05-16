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

        $breadcrumb = (object)[
            'title' => 'Dashboard',
            // 'list' =>['Home','Welcome']
        ];
        $activeMenu = 'dashboard';
    
        return view('welcome', ['breadcrumb' =>$breadcrumb, 'activeMenu'=> $activeMenu ]);

    }
}

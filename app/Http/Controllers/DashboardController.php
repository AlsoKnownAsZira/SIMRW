<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexWarga()
    {
        $breadcrumb = (object)[
            'title' => 'Dashboard',
            // 'list' =>['Home','Welcome']
        ];
        $activeMenu = 'dashboard';

        return view('Warga', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function indexRW()
    {
        $breadcrumb = (object)[
            'title' => 'Dashboard',
            // 'list' =>['Home','Welcome']
        ];
        $activeMenu = 'dashboard';

        return view('pengurus.index', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function indexRT()
    {
        $breadcrumb = (object)[
            'title' => 'Dashboard',
            // 'list' =>['Home','Welcome']
        ];
        $activeMenu = 'dashboard';

        return view('pengurus.index', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        /**
         * in login process, username and password must be filled
         */
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        /**
         * Take only username and password from user data request
         */
        $credential = $request->only('username', 'password');

        /**
         * if user data is valid
         */
        if (!Auth::attempt($credential)) {
            return redirect('login')
                ->withInput()
                ->withErrors(['login_failed' => 'Pastikan kembali username dan password yang dimasukan sudah benar']);
        }

        $request->session()->regenerate();


        // return route('/warga');

        return redirect()->intended(match (Auth::user()->role) {
            /**
             * if user has RW roles
             */
            'RW' => 'RW',
            /**
             * if user has RT roles
             */
            'RT' => 'RT',
            /**
             * if user has warga roles
             */
            'Warga' => 'Warga',
                /**
             * if user has no roles
             */
            default => '/',
        });
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}

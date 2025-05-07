<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');
        return view('dashboard', ['username' => $username]);
    }

    public function profile(Request $request) {
        $username = $request->query('username');
        return view('profile', ['username' => $username]);
    }

    public function pengelolaan() {
        $data = [
            ['nama' => 'Produk A', 'harga' => 10000],
            ['nama' => 'Produk B', 'harga' => 15000],
            ['nama' => 'Produk C', 'harga' => 20000],
        ];
        return view('pengelolaan', ['data' => $data]);
    }
}
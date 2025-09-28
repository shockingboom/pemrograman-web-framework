<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menambahkan method untuk menampilkan halaman utama
    public function index()
    {
        // Menambahkan flash message
        session()->flash('message', 'Selamat datang di aplikasi Laravel!');

        // Menampilkan view home.blade.php
        return view('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index(){
        $halaman = 'Data Guru';
        $guru = Guru::all();

        return view('pages.guru', compact('halaman', 'guru'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $halaman = 'Data Siswa';
        $siswa = Siswa::all();

        return view('pages.siswa', compact('halaman', 'siswa'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Siswa;

class KelasController extends Controller
{
    public function index(){
        $halaman = 'Data Kelas';
        $kelas = Kelas::all();
        // $jumlah =
        // \\Siswa::where('id_kelas', )

        return view('pages.kelas', compact('halaman', 'kelas'));
    }
}

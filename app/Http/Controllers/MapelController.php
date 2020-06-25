<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;

class MapelController extends Controller
{
    public function index(){
        $halaman = 'Data Mata Pelajaran';
        $mapel = Mapel::all();

        return view('pages.mapel', compact('halaman', 'mapel'));
    }
}

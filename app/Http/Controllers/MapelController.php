<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;

class MapelController extends Controller
{
    public function index(){
        $halaman = 'Data Mata Pelajaran';
        $mapel = Mapel::all();

        return view('mapel.index', compact('halaman', 'mapel'));
    }

    public function show(Mapel $mapel){
        $halaman = 'Detail Data Mata Pelajaran';

        return view('mapel.show', compact('halaman', 'mapel'));
    }

    public function create(){
        $halaman = 'Tambah Data Mata Pelajaran';

        return view('mapel.create', compact('halaman'));
    }

    public function store(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'kd_mapel' => 'required|regex:/[MP]{2}[0-9]{3}/|unique:mapel,kd_mapel',
            'nama_mapel' => 'required|string|min:3'
        ]);

        $mapel = Mapel::create($input);

        $mapel->guru()->attach($request->input('guru'));

        return redirect('mapel')->withSuccess('Data berhasil ditambah!');
    }

    public function edit(Mapel $mapel){
        $halaman = 'Edit Data Mata Pelajaran';

        return view('mapel.edit', compact('halaman', 'mapel'));
    }

    public function update(Mapel $mapel, Request $request){
        $input = $request->all();

        $this->validate($request, [
            'kd_mapel' => 'required|regex:/[MP]{2}[0-9]{3}/|unique:mapel,kd_mapel,' . $request->input('id'),
            'nama_mapel' => 'required|string|min:3'
        ]);

        $mapel->update($input);

        $mapel->guru()->sync($request->input('guru'));

        return redirect('mapel')->withSuccess('Data berhasil disunting!');
    }

    public function destroy(Mapel $mapel){
        $mapel->delete();

        return redirect('mapel')->withSuccess('Data berhasil dihapus!');
    }
}

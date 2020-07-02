<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eskul;
use App\Siswa;

class EskulController extends Controller
{
    public function index(){
        $halaman = 'Data Ekstrakulikuler';
        $eskul = Eskul::all();

        return view('eskul.index', compact('halaman', 'eskul'));
    }

    public function show($id){
        $halaman = 'Detail Data Ekstrakulikuler';

        $eskul = Eskul::findOrFail($id);
        $siswa = Eskul::find($id)->siswa()->get();

        return view('eskul.show', compact('halaman', 'eskul', 'siswa'));
    }

    public function create(){
        $halaman = 'Tambah Data Ekstrakulikuler';

        return view('eskul.create', compact('halaman'));
    }

    public function store(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'nama_eskul' => 'required|unique:eskul,nama_eskul'
        ]);

        $eskul = Eskul::create($input);

        return redirect('eskul')->withSuccess('Data berhasil ditambah!');
    }

    public function edit(Eskul $eskul){
        $halaman = 'Edit Data Ekstrakulikuler';

        return view('eskul.edit', compact('halaman', 'eskul'));
    }

    public function update(Eskul $eskul, Request $request){
        $input = $request->all();

        $this->validate($request, [
            'nama_eskul' => 'required|unique:eskul,nama_eskul,' . $request->input('id')
        ]);

        $eskul->update($input);
        return redirect('eskul')->withSuccess('Data berhasil disunting!');
    }

    public function destroy(Eskul $eskul){
        $eskul->delete();

        return redirect('eskul')->withSuccess('Data berhasil dihapus!');
    }
}

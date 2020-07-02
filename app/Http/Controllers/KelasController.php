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
        // \\kelas::where('id_kelas', )

        return view('kelas.index', compact('halaman', 'kelas'));
    }

    public function show($id){
        $halaman = 'Detail Data Kelas';

        $kelas = Kelas::findOrFail($id);
        $siswa = Siswa::where('id_kelas', $id)->get();

        return view('kelas.show', compact('halaman', 'kelas', 'siswa'));
    }

    public function create(){
        $halaman = 'Tambah Data kelas';

        return view('kelas.create', compact('halaman'));
    }

    public function store(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'nama_kelas' => 'required|regex:/[XI]{1,3}[\-][IVX]{1,}/|unique:kelas,nama_kelas'
        ]);

        $kelas = Kelas::create($input);

        return redirect('kelas')->withSuccess('Data berhasil ditambah!');
    }

    public function edit(Kelas $kelas){
        $halaman = 'Edit Data kelas';

        return view('kelas.edit', compact('halaman', 'kelas'));
    }

    public function update(Kelas $kelas, Request $request){
        $input = $request->all();

        $this->validate($request, [
            'nama_kelas' => 'required|regex:/[XI]{1,3}[\-][IVX]{1,}/|unique:kelas,nama_kelas,' . $request->input('id')
        ]);

        $kelas->update($input);
        return redirect('kelas')->withSuccess('Data berhasil disunting!');
    }

    public function destroy(Kelas $kelas){
        $kelas->delete();

        return redirect('kelas')->withSuccess('Data berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Http\Requests\SiswaRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    public function index(){
        $halaman = 'Data Siswa';
        $siswa = Siswa::all();

        return view('siswa.index', compact('halaman', 'siswa'));
    }

    public function show(Siswa $siswa){
        $halaman = 'Detail Data Siswa';

        return view('siswa.show', compact('halaman', 'siswa'));
    }

    public function create(){
        $halaman = 'Tambah Data Siswa';

        return view('siswa.create', compact('halaman'));
    }

    public function store(SiswaRequest $request){
        $input = $request->all();

        // Upload Foto
        if($request->hasFile('foto')){
            $input['foto'] = $this->uploadFoto($request);
        }

        $siswa = Siswa::create($input);

        $siswa->eskul()->attach($request->input('eskul'));

        return redirect('siswa')->withSuccess('Data berhasil ditambah!');
    }

    public function edit(Siswa $siswa){
        $halaman = 'Edit Data Siswa';

        return view('siswa.edit', compact('halaman', 'siswa'));
    }

    public function update(Siswa $siswa, SiswaRequest $request){
        $input = $request->all();

        // Foto
        if($request->hasFile('foto')){
            $input['foto'] = $this->updateFoto($siswa, $request);
        }

        $siswa->update($input);

        $siswa->eskul()->sync($request->input('eskul'));

        return redirect('siswa')->withSuccess('Data berhasil disunting!');
    }

    public function destroy(Siswa $siswa){
        $this->hapusFoto($siswa);

        $siswa->delete();
        return redirect('siswa')->withSuccess('Data berhasil dihapus!');
    }

    private function uploadFoto(SiswaRequest $request){
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();

        if($request->file('foto')->isValid()){
            $foto_name = date('YmdHis') . ".$ext";
            $request->file('foto')->move('upload', $foto_name);
            return $foto_name;
        }
        return false;
    }

    private function updateFoto(Siswa $siswa, SiswaRequest $request){
        if($request->file('foto')){
            $exist = Storage::disk('foto')->exists($siswa->foto);
            if(isset($siswa->foto) && $exist){
                $delete = Storage::disk('foto')->delete($siswa->foto);
            }

            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            if($request->file('foto')->isValid()){
                $foto_name = date('YmdHis') . ".$ext";
                $request->file('foto')->move('upload', $foto_name);
                return $foto_name;
            }
        }
    }

    private function hapusFoto(Siswa $siswa){
        $is_foto_exist = Storage::disk('foto')->exists($siswa->foto);

        if($is_foto_exist){
            Storage::disk('foto')->delete($siswa->foto);
        }
    }
}

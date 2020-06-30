<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Jabatan;
use App\Http\Requests\GuruRequest;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index(){
        $halaman = 'Data Guru';
        $guru = Guru::all();

        return view('guru.index', compact('halaman', 'guru'));
    }

    public function show(Guru $guru){
        $halaman = 'Detail Data Guru';

        return view('guru.show', compact('halaman', 'guru'));
    }

    public function create(){
        $halaman = 'Tambah Data Guru';

        return view('guru.create', compact('halaman'));
    }

    public function store(GuruRequest $request){
        $input = $request->all();
        // dd($input);

        // Upload Foto
        if($request->hasFile('foto')){
            $input['foto'] = $this->uploadFoto($request);
        }

        $guru = Guru::create($input);

        if($request->filled('jabatan')){
            $this->insertJabatan($guru, $request);
        }

        $guru->mapel()->attach($request->input('mapel'));


        return redirect('guru');
    }

    public function edit(Guru $guru){
        $halaman = 'Edit Data Guru';

        if(!empty($guru->jabatan->nama_jabatan)){
            $guru->nama_jabatan = $guru->jabatan->nama_jabatan;
        }

        return view('guru.edit', compact('halaman', 'guru'));
    }

    public function update(Guru $guru, GuruRequest $request){
        $input = $request->all();

        // Foto
        if($request->hasFile('foto')){
            $input['foto'] = $this->updateFoto($guru, $request);
        }

        $guru->update($input);

        $this->updateJabatan($guru, $request);

        $guru->mapel()->sync($request->input('mapel'));

        return redirect('guru');
    }

    public function destroy(Guru $guru){
        $this->hapusFoto($guru);

        $guru->delete();
        return redirect('guru');
    }

    private function uploadFoto(GuruRequest $request){
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();

        if($request->file('foto')->isValid()){
            $foto_name = date('YmdHis') . ".$ext";
            $request->file('foto')->move('upload', $foto_name);
            return $foto_name;
        }
        return false;
    }

    private function updateFoto(Guru $guru, GuruRequest $request){
        if($request->file('foto')){
            $exist = Storage::disk('foto')->exists($guru->foto);
            if(isset($guru->foto) && $exist){
                $delete = Storage::disk('foto')->delete($guru->foto);
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

    private function hapusFoto(Guru $guru){
        $is_foto_exist = Storage::disk('foto')->exists($guru->foto);

        if($is_foto_exist){
            Storage::disk('foto')->delete($guru->foto);
        }
    }

    private function insertJabatan(Guru $guru, GuruRequest $request){
        $jabatan = new Jabatan;
        $jabatan->nama_jabatan = $request->input('jabatan');
        $guru->jabatan()->save($jabatan);
    }

    private function updateJabatan(Guru $guru, GuruRequest $request){
        if($guru->jabatan){
            // jika telp diisi
            if($request->filled('jabatan')){
                $jabatan = $guru->jabatan;
                $jabatan->nama_jabatan = $request->input('jabatan');
                $guru->jabatan()->save($jabatan);
            }
            else{
                $guru->jabatan()->delete();
            }
        }
        else{
            if($request->filled('jabatan')){
                $jabatan = new Jabatan;
                $jabatan->nama_jabatan = $request->input('jabatan');
                $guru->jabatan()->save($jabatan);
            }
        }
    }
}

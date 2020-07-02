<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Siswa;
use App\Guru;
use App\Kelas;
use App\Mapel;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all()->count();
        $siswa = Siswa::all()->count();
        $guru = Guru::all()->count();
        $kelas = Kelas::all()->count();
        $mapel = Mapel::all()->count();

        return view('home', compact('user', 'siswa', 'guru', 'kelas', 'mapel'));
    }

    public function profile(){
        $halaman = 'Profil User';

        return view('profile', compact('halaman'));
    }

    public function update(Request $request){
        $user = User::findOrFail($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('profile')->withSuccess('Data berhasil disunting!');
    }
}

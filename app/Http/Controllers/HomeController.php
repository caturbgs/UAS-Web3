<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use Alert;
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
        // Alert::success('Sukses', 'Anda berhasil login kedalam aplikasi');

        return view('home');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $halaman = 'Data User';
        $user = User::all();

        return view('user.index', compact('halaman', 'user'));
    }

    public function show(User $user){
        $halaman = 'Detail Data User';

        return view('user.show', compact('halaman', 'user'));
    }

    public function create(){
        $halaman = 'Tambah Data User';

        return view('user.create', compact('halaman'));
    }

    public function store(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required|unique:users,name',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($input);

        return redirect('user')->withSuccess('Data berhasil ditambah!');
    }

    public function edit(User $user){
        $halaman = 'Edit Data User';

        return view('user.edit', compact('halaman', 'user'));
    }

    public function update(User $user, Request $request){
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required|unique:users,name,' . $request->input('id'),
            'email' => 'required|email',
            'password' => 'sometimes|nullable|confirmed'
        ]);

        $user->update($input);

        return redirect('user')->withSuccess('Data berhasil disunting!');
    }

    public function destroy(User $user){
        $user->delete();

        return redirect('user')->withSuccess('Data berhasil dihapus!');
    }
}

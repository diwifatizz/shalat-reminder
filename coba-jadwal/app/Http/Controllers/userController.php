<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller
{
    public function index()
    {
        $pengguna = User::all();
        return view('back.user.index', [
            'pengguna' => $pengguna
        ]);
    }

    public function create()
    {
        // Jangan menggunakan variabel yang tidak didefinisikan (contoh: $user)
        // Ganti menjadi $pengguna
        $pengguna = User::all();

        return view('back.user.create', compact('pengguna'));
    }

    // Anda perlu menambahkan method store untuk menangani penyimpanan data pengguna baru
    public function store(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'level' => 'required|string',
        ]);

        // Simpan data pengguna baru ke database
        User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'level' => $request->input('level'),
        ]);

        return Redirect::route('user')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $pengguna = User::findOrFail($id);
        $pengguna->delete();

        return Redirect::route('user')->with('success', 'Pengguna berhasil dihapus.');
    }
}

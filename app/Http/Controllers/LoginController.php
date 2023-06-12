<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        // ambil variabel nim dan password
        $nim = $request->input('username');
        $pw = $request->input('password');

        // cek apakah terdapat nim dan password yang sama di dalam database
        $datum = Mahasiswa::where('nim', $nim)->where('password', $pw)->first();

        // jika data atau nim dan password ada, buat sesi dengan nim, dan arahkan ke halaman profile
        if ($datum) {
            session()->put('nim', $nim);
            return redirect()->route('profile');
        } else {
            // jika nim dan password tidak ditemukan, beri pesan kesalahan
            $error = "NIM tidak ditemukan";
            return view('login', compact('error'));
        }
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Models\DataMengaji;
use App\Models\mengaji;

class DataMengajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rekaman' => 'required|file|mimes:audio/mpeg, audio/wav', // contoh validasi untuk file rekaman
            'juz' => 'required',
            'surah' => 'required',
            'ayat' => 'required',
        ]);
    
        // Simpan data mengaji ke dalam database menggunakan model
        $dataMengaji = new mengaji();
        // Atur nilai atribut pada model sesuai dengan input yang diterima
        $dataMengaji->rekaman = $request->file('rekaman')->store('rekaman'); // contoh menyimpan file rekaman
        $dataMengaji->juz = $request->juz;
        $dataMengaji->surah = $request->surah;
        $dataMengaji->ayat = $request->ayat;
        $dataMengaji->save();
    
        // Redirect atau berikan respons sesuai dengan kebutuhan aplikasi Anda
       return redirect()->back()->with('success', 'Data mengaji berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function showForm()
    {
        return view('datamengaji');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses tabel Fakultas
        $result = Fakultas::all(); // SELECT * FROM fakultas
        //dd($result); // dump data
        return view('fakultas.index', compact('result')); // kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // validasi input
        $input = $request->validate([
            'nama_fakultas' => 'required|unique:fakultas',
            'singkatan'  => 'required'
        ]);

        //simpan data ke tabel fakultas
        Fakultas::create($input);

        //redirect ke route fakultas.index
        return redirect() -> route('fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        return view('fakultas.edit', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        $input = $request->validate([
            'nama_fakultas' => 'required|unique:fakultas,nama_fakultas,' . $fakultas->id,
            'singkatan'  => 'required'
        ]);

        $fakultas->update($input);

        return redirect() -> route('fakultas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fakultas)
    {
        $fakultas = Fakultas::find($fakultas, 'id');
        $fakultas->delete();
        return redirect()->route('fakultas.index');
    }
}

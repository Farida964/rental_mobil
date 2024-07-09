<?php

namespace App\Http\Controllers;

use App\Models\JenisKendaraan;
use Illuminate\Http\Request;

class JenisKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *      *
     * @return \Illuminate\Http\Response

     */
    public function index()
    {
        {
            // Mengambil semua data jenis_kendaraan
            $list_jenis_kendaraan = JenisKendaraan::all();
            return view('jeniskendaraan.index', compact('list_jenis_kendaraan'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jenis_kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        JenisKendaraan::create($request->all());

        return redirect()->route('jenis_kendaraan.index')->with('success', 'Kategori UMKM created successfully.');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\JenisKendaraan  $jenisKendaraan
     * @return \Illuminate\Http\Response

     */
    public function show(JenisKendaraan $jenis_kendaraan)
    {
        //
        return view('jeniskendaraan.show', compact('jenis_kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.     *
     * @param  \App\Models\JenisKendaraan  $jenisKendaraan
     * @return \Illuminate\Http\Response

     */
    public function edit(JenisKendaraan $jenis_kendaraan)
    {
        //
        return view('jeniskendaraan.edit', compact('jenis_kendaraan'));
    }

    /**
     * Update the specified resource in storage.     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisKendaraan  $jenisKendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisKendaraan $jenisKendaraan)
    {
        //
        {
            $request->validate([
                'nama' => 'required',
            ]);
    
            $jenisKendaraan->update($request->all());
    
            return redirect()->route('jenis_kendaraan.index')->with('success', 'Kategori UMKM updated successfully.');
        }
    }

    

    /**
     * Remove the specified resource from storage.     *
     * @param  \App\Models\JenisKendaraan  $jenisKendaraan
     * @return \Illuminate\Http\Response

     */
    public function destroy(JenisKendaraan $jenisKendaraan)
    {
        $jenis_kendaraan->delete();

        return redirect()->route('jenis_kendaraan.index')->with('success', 'Kategori UMKM deleted successfully.');
    }
}

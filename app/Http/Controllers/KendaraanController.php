<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Menampilkan daftar kendaraan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    /**
     * Menampilkan form untuk membuat kendaraan baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Menyimpan kendaraan baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'nopol' => 'required|string|max:255',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'nullable|string',
            'jenis_kendaraan_id' => 'required|integer',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        $kendaraan = Kendaraan::create($validatedData);

        return response()->json(['message' => 'Kendaraan berhasil ditambahkan', 'data' => $kendaraan]);
    }

    /**
     * Menampilkan detail kendaraan.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $kendaraan)
    {
        return response()->json($kendaraan);
    }

    /**
     * Menampilkan form untuk mengedit kendaraan.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        // Kode untuk menampilkan form pengeditan kendaraan
    }

    /**
     * Memperbarui data kendaraan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'nopol' => 'required|string|max:255',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'nullable|string',
            'jenis_kendaraan_id' => 'required|integer',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        $kendaraan->update($validatedData);

        return response()->json(['message' => 'Kendaraan berhasil diperbarui', 'data' => $kendaraan]);
    }

    /**
     * Menghapus kendaraan.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return response()->json(['message' => 'Kendaraan berhasil dihapus']);
    }
}

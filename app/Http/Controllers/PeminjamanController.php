<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('list_peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.create');
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
            'nama_peminjam' => 'required|string',
            'ktp_peminjam' => 'required|string',
            'keperluan_pinjaman' => 'required|string',
            'mulai' => 'required|date',
            'selesai' => 'required|string',
            'biaya' => 'required|string',
            'komentar_peminjam' => 'required|string',
            'status_pinjam' => 'required|string',
            'armada_id' => 'required|string',
        ]);

        Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'ktp_peminjam' => $request->ktp_peminjam,
            'keperluan_pinjaman' => $request->keperluan_pinjaman,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'biaya' => $request->biaya,
            'komentar_peminjam' => $request->komentar_peminjam,
            'status_pinjam' => $request->status_pinjam,
            'armada_id' => $request->armada_id,
        ]);

        return redirect()->route('peminjamans.index')->with('success', 'Peminjaman created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('peminjaman.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        return view('peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $peminjaman->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('peminjamans.index')->with('success', 'Peminjaman updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('peminjamans.index')->with('success', 'Peminjaman deleted successfully');
    }
}

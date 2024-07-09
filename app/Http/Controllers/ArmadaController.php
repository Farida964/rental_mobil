<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data armada
        $list_armada = armada::all();
        return view('armada.index', compact('list_armada'));
    }



    public function create()
    {
        // Return the view for creating a new armada
        return view('armada.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'merek' => 'required|string',
            'nopol' => 'required|string',
            'thnbeli' => 'required|string',
            'deskripsi' => 'required|date',
            'kapasitas_kursi' => 'required|string',
            'rating' => 'required|string',
            'jenis_id' => 'required|string',
        ]);

        // Create a new armada instance with the validated data
        armada::create([
            'merek' => $request->merek,
            'nopol' => $request->nopol,
            'thnbeli' => $request->thnbeli,
            'deskripsi' => $request->deskripsi,
            'kapasitas_kursi' => $request->kapasitas_kursi,
            'rating' => $request->rating,
            'jenis_id' => $request->jenis_id,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('armadas.index')->with('success', 'armada created successfully.');
    }
    public function show(armada $armada)
    {
        // Pass the armada instance to the view
        return view('armada.show', compact('armada'));
    }
    
    public function edit(armada $armada)
    {
        // Pass the armada instance to the view
        return view('armada.edit', compact('armada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, armada $armada)
    {

        $validatedData = $request->validate([
            'merek' => 'required|string',
            'nopol' => 'required|string',
            'thnbeli' => 'required|string',
            'deskripsi' => 'required|date',
            'kapasitas_kursi' => 'required|string',
            'rating' => 'required|string',
            'jenis_id' => 'required|string',
        ]);
    
        // Update the armada instance with validated data
        $armada->update($validatedData);
    
        // Redirect to the index page with a success message
        return redirect()->route('armadas.index')->with('success', 'Armada updated successfully');
    }

    public function destroy(armada $armada)
    {
        // Delete the armada instance
        $armada->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('armadas.index')->with('success', 'armada deleted successfully');
    }
}
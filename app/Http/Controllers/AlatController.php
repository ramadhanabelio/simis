<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class AlatController extends Controller
{
    public function index()
    {
        $alats = Alat::all();
        return view('alat.index', compact('alats'));
    }

    public function create()
    {
        return view('alat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_alat' => 'required',
            'tanggal_pengadaan' => 'required|date',
            'merk' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Alat::create($request->all());

        return redirect()->route('alat.index')->with('success', 'Alat berhasil ditambahkan.');
    }

    public function edit(Alat $alat)
    {
        return view('alat.edit', compact('alat'));
    }

    public function update(Request $request, Alat $alat)
    {
        $request->validate([
            'jenis_alat' => 'required',
            'tanggal_pengadaan' => 'required|date',
            'merk' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $alat->update($request->all());

        return redirect()->route('alat.index')->with('success', 'Alat berhasil diperbarui.');
    }

    public function destroy(Alat $alat)
    {
        $alat->delete();

        return redirect()->route('alat.index')->with('success', 'Alat berhasil dihapus.');
    }

    public function print()
    {
        $alats = Alat::all();
        $pdf = Pdf::loadView('alat.print', compact('alats'));
        return $pdf->download('daftar_alat.pdf');
    }
}

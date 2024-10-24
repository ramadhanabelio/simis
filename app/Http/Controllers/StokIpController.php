<?php

namespace App\Http\Controllers;

use App\Models\StokIp;
use Illuminate\Http\Request;

class StokIpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stokIps = StokIp::all();
        return view('stok_ip.index', compact('stokIps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $polis = ['Mata', 'Gigi', 'Umum', 'THT'];
        return view('stok_ip.create', compact('polis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'poli' => 'required',
            'ip_address' => 'required|ip',
        ]);

        StokIp::create($request->all());

        return redirect()->route('stok_ip.index')->with('success', 'Data Stok IP berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StokIp $stokIp)
    {
        $polis = ['Mata', 'Gigi', 'Umum', 'THT'];
        return view('stok_ip.edit', compact('stokIp', 'polis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StokIp $stokIp)
    {
        $request->validate([
            'poli' => 'required',
            'ip_address' => 'required|ip',
        ]);

        $stokIp->update($request->all());

        return redirect()->route('stok_ip.index')->with('success', 'Data Stok IP berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StokIp $stokIp)
    {
        $stokIp->delete();
        return redirect()->route('stok_ip.index')->with('success', 'Data Stok IP berhasil dihapus');
    }
}

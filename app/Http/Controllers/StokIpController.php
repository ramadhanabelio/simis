<?php

namespace App\Http\Controllers;

use App\Models\StokIp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StokIpController extends Controller
{
    public function index()
    {
        $stokIps = StokIp::all();
        return view('stok_ip.index', compact('stokIps'));
    }

    public function create()
    {
        $polis = ['Mata', 'Gigi', 'Umum', 'THT'];
        return view('stok_ip.create', compact('polis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'poli' => 'required',
            'ip_address' => 'required|ip',
        ], [
            'ip_address.ip' => 'IP Address yang dimasukkan tidak valid.'
        ]);

        StokIp::create($request->all());

        return redirect()->route('stok_ip.index')->with('success', 'Stok IP berhasil ditambahkan');
    }

    public function edit(StokIp $stokIp)
    {
        $polis = ['Mata', 'Gigi', 'Umum', 'THT'];
        return view('stok_ip.edit', compact('stokIp', 'polis'));
    }

    public function update(Request $request, StokIp $stokIp)
    {
        $request->validate([
            'poli' => 'required',
            'ip_address' => 'required|ip',
        ], [
            'ip_address.ip' => 'IP Address yang dimasukkan tidak valid.'
        ]);

        $stokIp->update($request->all());

        return redirect()->route('stok_ip.index')->with('success', 'Stok IP berhasil diperbarui.');
    }

    public function destroy(StokIp $stokIp)
    {
        $stokIp->delete();

        return redirect()->route('stok_ip.index')->with('success', 'Stok IP berhasil dihapus.');
    }
}

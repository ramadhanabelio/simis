@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Alat</h1>

        <form action="{{ route('alat.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="jenis_alat" class="form-label">Jenis Alat</label>
                <select class="form-select" id="jenis_alat" name="jenis_alat" required>
                    <option value="LAN">LAN</option>
                    <option value="Printer">Printer</option>
                    <option value="PC">PC</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_pengadaan" class="form-label">Tanggal Pengadaan</label>
                <input type="date" class="form-control" id="tanggal_pengadaan" name="tanggal_pengadaan" required>
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

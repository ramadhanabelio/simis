@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-4">Edit Alat</h3>

        <form action="{{ route('alat.update', $alat->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $alat->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="jenis_alat" class="form-label">Jenis Alat</label>
                <select class="form-select" id="jenis_alat" name="jenis_alat" required>
                    <option value="LAN" {{ $alat->jenis_alat == 'LAN' ? 'selected' : '' }}>LAN</option>
                    <option value="Printer" {{ $alat->jenis_alat == 'Printer' ? 'selected' : '' }}>Printer</option>
                    <option value="PC" {{ $alat->jenis_alat == 'PC' ? 'selected' : '' }}>PC</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_pengadaan" class="form-label">Tanggal Pengadaan</label>
                <input type="date" class="form-control" id="tanggal_pengadaan" name="tanggal_pengadaan"
                    value="{{ $alat->tanggal_pengadaan }}" required>
            </div>

            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" value="{{ $alat->merk }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ $alat->stok }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection

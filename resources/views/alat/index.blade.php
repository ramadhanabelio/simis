@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Daftar Alat dan Barang</h3>
            <div class="ms-auto">
                <a href="{{ route('alat.create') }}" class="btn btn-success">+ Tambah Alat</a>
                <a href="{{ route('alat.print') }}" class="btn btn-danger ms-2"><i class="bi bi-printer-fill me-2"></i> Print
                    PDF</a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table id="misTable" class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jenis Alat</th>
                    <th>Tanggal Pengadaan</th>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alats as $alat)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $alat->jenis_alat }}</td>
                        <td>{{ $alat->tanggal_pengadaan }}</td>
                        <td>{{ $alat->merk }}</td>
                        <td>{{ number_format($alat->harga, 2) }}</td>
                        <td>{{ $alat->stok }}</td>
                        <td>
                            <a href="{{ route('alat.edit', $alat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('alat.destroy', $alat->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

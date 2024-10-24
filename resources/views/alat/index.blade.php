@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Daftar Alat dan Barang</h1>

        <a href="{{ route('alat.create') }}" class="btn btn-primary mb-3">Tambah Alat</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Alat</th>
                    <th>Tanggal Pengadaan</th>
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alats as $alat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $alat->nama }}</td>
                        <td>{{ $alat->jenis_alat }}</td>
                        <td>{{ $alat->tanggal_pengadaan }}</td>
                        <td>{{ $alat->merk }}</td>
                        <td>{{ $alat->stok }}</td>
                        <td>
                            <a href="{{ route('alat.edit', $alat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('alat.destroy', $alat->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus alat ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

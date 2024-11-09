@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Daftar Stok IP</h3>
            <a href="{{ route('stok_ip.create') }}" class="btn btn-success">+ Tambah Stok IP</a>
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
                    <th>Poli</th>
                    <th>IP Address</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stokIps as $stokIp)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $stokIp->poli }}</td>
                        <td>{{ $stokIp->ip_address }}</td>
                        <td>
                            <a href="{{ route('stok_ip.edit', $stokIp->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('stok_ip.destroy', $stokIp->id) }}" method="POST" class="d-inline">
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

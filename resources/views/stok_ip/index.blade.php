@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Stok IP</h1>
        <a href="{{ route('stok_ip.create') }}" class="btn btn-primary">Tambah Stok IP</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Poli</th>
                    <th>IP Address</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stokIps as $stokIp)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stokIp->poli }}</td>
                        <td>{{ $stokIp->ip_address }}</td>
                        <td>
                            <a href="{{ route('stok_ip.edit', $stokIp->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('stok_ip.destroy', $stokIp->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-4">Edit Stok IP</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <form action="{{ route('stok_ip.update', $stokIp->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="poli" class="form-label">Poli</label>
                <select class="form-select" id="poli" name="poli" required>
                    <option value="">Pilih Poli</option>
                    @foreach ($polis as $poli)
                        <option value="{{ $poli }}" {{ $stokIp->poli == $poli ? 'selected' : '' }}>
                            {{ $poli }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="ip_address" class="form-label">IP Address</label>
                <input type="text" class="form-control" id="ip_address" name="ip_address"
                    value="{{ $stokIp->ip_address }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection

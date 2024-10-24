@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Stok IP</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('stok_ip.update', $stokIp->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="poli">Pilih Poli</label>
                <select name="poli" class="form-control" required>
                    <option value="">--Pilih Poli--</option>
                    @foreach ($polis as $poli)
                        <option value="{{ $poli }}" {{ $stokIp->poli == $poli ? 'selected' : '' }}>
                            {{ $poli }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ip_address">IP Address</label>
                <input type="text" name="ip_address" class="form-control" value="{{ $stokIp->ip_address }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection

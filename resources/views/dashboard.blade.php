@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Selamat datang, Admin MIS</h1>
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card text-white bg-success shadow" style="border-radius: 15px;">
                    <div class="card-header text-center">
                        <h4>Total Alat</h4>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="card-title display-4">{{ $totalAlat }}</h1>
                        <p class="card-text">Jumlah total alat yang terdaftar.</p>
                        <i class="bi bi-tools" style="font-size: 50px;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-white bg-primary shadow" style="border-radius: 15px;">
                    <div class="card-header text-center">
                        <h4>Total Stok IP</h4>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="card-title display-4">{{ $totalStokIp }}</h1>
                        <p class="card-text">Jumlah total stok IP yang terdaftar.</p>
                        <i class="bi bi-box-seam" style="font-size: 50px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

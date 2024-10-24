<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\StokIp;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAlat = Alat::count();
        $totalStokIp = StokIp::count();

        return view('dashboard', compact('totalAlat', 'totalStokIp'));
    }
}

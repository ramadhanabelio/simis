<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokIp extends Model
{
    use HasFactory;

    protected $fillable = [
        'poli',
        'ip_address',
    ];
}

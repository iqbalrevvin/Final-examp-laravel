<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    protected $fillable = [
        'Jenis_kebutuhan',
        'Nominal',
        'created_at'
    ];
}

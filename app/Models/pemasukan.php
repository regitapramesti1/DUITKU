<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $fillable = ['sumber_pendapatan', 'status', 'keterangan', 'price', 'tanggal'];
}

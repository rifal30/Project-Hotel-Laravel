<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasiModel extends Model
{
    use HasFactory;
    protected $table="reservasi";
    protected $fillable = ['nama', 'nik', 'email', 'type', 'cekin', 'cekout', 'jumlah'];
}

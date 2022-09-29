<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rpl2model extends Model
{
    use HasFactory;
    protected $table='rpl2models';
    protected $fillable=['nama','kelas','nis','tgl'];
}

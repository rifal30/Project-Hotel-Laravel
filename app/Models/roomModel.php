<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomModel extends Model
{
    use HasFactory;
    protected $table="room";
    protected $fillable = ['title', 'image', 'desc', 'harga'];
}

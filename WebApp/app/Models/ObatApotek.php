<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatApotek extends Model
{
    use HasFactory;
    public $fillable = ['apotek_id', 'image', 'nama_obat', 'harga', 'qty'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apotek extends Model
{
    use HasFactory;
    public $fillable =
        [
            'name', 'address', 'jam_operasi', 'picture', 'telp',
        ];
}

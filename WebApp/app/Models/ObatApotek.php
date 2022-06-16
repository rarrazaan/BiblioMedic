<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatApotek extends Model
{
    use HasFactory;
    public $fillable = ['obat_id', 'apotek_id', 'harga', 'picture', 'qty'];
    public function obat_apotek(){
        return $this->hasOne(Obat::class, 'id', 'obat_id');
    }
}
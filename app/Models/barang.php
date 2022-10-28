<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
 use HasFactory;
 protected $primaryKey = 'kode_barang';
 protected $table = "barang";
 public $timestamps = false;
 public $incrementing = false;
 protected $fillable = [
  'kode_barang', 'nama_barang'
];





public function alternatif()
{
 return $this->hasMany(alternatif::class, 'kode_alternatif');
}

public function moora()
{
 return $this->hasMany(moora::class, 'id_moora');
}

public function akar()
{
 return $this->hasMany(akar::class, 'id_akar');
}

public function kriteria(){

  return $this->belongsTo(kriteria::class, 'kode_kriteria');
}
}

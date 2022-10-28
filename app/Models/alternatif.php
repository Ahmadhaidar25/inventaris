<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternatif extends Model
{
    use HasFactory;
    protected $primaryKey = "kode_alternatif";
    protected $table = "alternatif";
    public $timestamps = false;
    public $incrementing = false;
   protected $fillable = [
  'kode_alternatif', 'kode_barang'
];

  public function barang(){

    return $this->belongsTo(barang::class, 'kode_barang');
}

public function moora(){

 return $this->hasMany(moora::class, 'id_moora');
}
}

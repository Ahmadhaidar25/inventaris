<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moora extends Model
{
    use HasFactory;


    protected $table = 'hasil_moora';
    protected $primaryKey = 'id_moora';

      public function barang(){

        return $this->belongsTo(barang::class, 'kode_barang');
    }

     public function alternatif(){

        return $this->belongsTo(alternatif::class, 'kode_alternatif');
    }
}

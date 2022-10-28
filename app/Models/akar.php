<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akar extends Model
{
    use HasFactory;
    protected $table='akar';
    protected $primaryKey='id_akar';

    public function barang(){
        
        return $this->belongsTo(barang::class, 'kode_barang');
    }
}

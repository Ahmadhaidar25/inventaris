<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_kriteria';
    protected $table = "kriteria";
    public $incrementing = false;

    public function barang()
    {
        return $this->hasMany(barang::class, 'kode_barang');
    }
}

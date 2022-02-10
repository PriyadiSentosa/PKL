<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suplier extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat'];
    protected $visible = ['nama', 'alamat'];
    public $timestamps = true;

    public function barang()
    {
        //Model 'wisatahor' bisa memiliki banyak data dari
        //model 'destinasi' melalui fk 'wisata_id'
        return $this->hasMany('App\Models\barang', 'suplier_id');
    }
}

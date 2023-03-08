<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterbarang extends Model
{
    use HasFactory;
    public $timestamps = false;
     
    protected $fillable = [

        'kode_barang',
        'nama_barang',
        'qty',
        'harga_beli',
        'harga_jual',
        'tanggal',
        'kategori_id',
        'satuan_id',
        'supplier_id'
    ];
    
    protected $primaryKey ='kode_barang';

    public function masterkategori(){
        return $this->belongsTo(masterkategori::class,'kategori_id');
    }

    public function mastersatuan(){
        return $this->belongsTo(mastersatuan::class,'satuan_id');
    }

    public function supplier(){
        return $this->belongsTo(supplier::class,'supplier_id');
    }


    public function getRouteKeyKode()
{
    return 'produk';
}
}

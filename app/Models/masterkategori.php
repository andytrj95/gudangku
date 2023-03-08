<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterkategori extends Model
{
    use HasFactory;

    public function masterbarang(){
        return $this->hasMany(masterbarang::class,'kategori_id');
    }

}

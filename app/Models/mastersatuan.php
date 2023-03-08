<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mastersatuan extends Model
{
    use HasFactory;

    public function masterbarang(){
        return $this->hasMany(masterbarang::class,'satuan_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded=[

    ];


    public function masterbarang(){
        return $this->hasMany(masterbarang::class,'supplier_id');
    }
}

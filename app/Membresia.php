<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    public function seccion(){

        return $this->belongsToMany(Seccion::class); // Muchos a muchos
        
    }
}

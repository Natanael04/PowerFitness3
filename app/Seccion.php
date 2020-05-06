<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    public function clase(){

        return $this->belongsToMany(Clase::class); // Muchos a muchos

    }
}

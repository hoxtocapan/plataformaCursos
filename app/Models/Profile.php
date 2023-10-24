<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//git remote add origin https://github.com/hoxtocapan/plataformaCursos.git

class Profile extends Model
{
    use HasFactory;

    //Relacion  uno a uno inversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}

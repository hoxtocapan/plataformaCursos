<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    const LIKE = 1;
    const DESLIKE = 2;

    protected $guarded = ['id'];

    //Relacion unoa muchos inversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }



    public function reactionable(){
        return $this->morphTo();
    }
}
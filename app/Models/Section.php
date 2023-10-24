<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion  uno a mucho
    public function lessons() {
        return $this->hasMany('App\Models\Lesson');
    }

     //Relacion uno a muchos inversas
     public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    public function modelos(){
        return $this->belongsTo(Modelo::class);
    }


    public function colors(){
        return $this->belongsTo('App\Models\Color');
    }


    public function estados(){
        return $this->belongsTo('App\Models\Estado');
    }
}

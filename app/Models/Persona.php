<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // uno a muchos

    // public function folios(){
    //     return $this->hasMany(Folio::class);
    // }

    // public function profesionals(){
    //     return $this->hasMany(Profesional::class);
    // }

    // uno a muchos inversa

    public function users(){
        return $this->belongsTo(User::class);
    }
}

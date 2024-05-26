<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $primaryKey = 'idf';

    public function classes() {
        return $this->hasMany(Classe::class,'idformation');
    }
    public function avis() {
        return $this->hasMany(Avis::class,'idf');
    }
}

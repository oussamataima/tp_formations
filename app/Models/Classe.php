<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $primaryKey = 'idc';

    public function etudiants() {
        return $this->hasMany(Etudiant::class,'idclasse') ;
    }

    public function formation() {
        return $this->belongsTo(Formation::class,'idformation') ;	
    }
}

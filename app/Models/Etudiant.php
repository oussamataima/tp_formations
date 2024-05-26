<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $primaryKey = 'CodeE';

    public function classe() {
        return $this->belongsTo(Classe::class, 'idclasse');
    }

    public function avis() {
        return $this->hasMany(Avis::class, 'idE' , 'CodeE');
    }
}

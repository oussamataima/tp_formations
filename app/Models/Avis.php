<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $primaryKey = 'idE';

    protected $table = 'avis';

    public function etudient() {
        return $this->belongsTo(Etudiant::class,'idE');
    }
    public function formation() {
        return $this->belongsTo(Formation::class,'idE');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom',  'date_Naissance', 'classe' ,'sexe'];

    // public function evaluations()
    // {
    //     return $this->hasMany(Evaluation::class, 'etudiant_id');
    // }

    // public function matiere() {
    //     return $this->belongsTo(Matiere::class);
    // }
}

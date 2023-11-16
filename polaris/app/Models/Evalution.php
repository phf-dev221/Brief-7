<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = ['etudiant_id', 'matiere_id','note_evaluation'];

    // // relation avec l'etudiant
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }

    // Relation avec la matière
    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'matiere_id');
    }
}

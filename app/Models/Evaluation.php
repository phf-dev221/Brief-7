<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Etudiant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    public function matiere()
    {
        return $this->belongsto(Matiere::class, 'matiere_id');
    }
    public function etudiant()
    {
        return $this->belongsto(Etudiant::class, 'etudiant_id');
    }
}

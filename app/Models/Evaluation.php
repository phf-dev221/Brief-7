<?php

namespace App\Models;

use App\Models\Evaluation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [
        'note',
        'matiere_id',
        'etudiant_id',
        'is_deleted',
    ];
}

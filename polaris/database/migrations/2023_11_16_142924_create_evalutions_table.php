<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_deleted');
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('matiere_id');
            $table->integer('note_evaluation');
            $table->timestamps();
           // Clés étrangères    
        $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
        $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // Déclaration des colonnes de la table
    protected $fillable = ['name']; 

    // Définition de la relation entre Group et Student
    public function students()
    {
        // Un groupe a plusieurs étudiants
        return $this->hasMany(Student::class, 'group_id'); 
    }
}

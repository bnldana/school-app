<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Déclaration des colonnes de la table
    protected $fillable = ['first_name', 'last_name', 'date_of_birth', 'address', 'group_id']; 

    public $timestamps = false; // Désactive les colonnes timestamps automatiques (created_at, updated_at)

    // Définition de la relation entre Student et Group
    public function group()
    {
        // Un étudiant appartient à un seul groupe
        return $this->belongsTo(Group::class, 'group_id'); 
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Group; // Importation du modèle Group

class GroupController extends Controller
{
    public function show($id) // Affiche uniquement les élèves d'une classe précise
    {
        $group = Group::with('students')->findOrFail($id);
        return view('show', compact('group')); 
    }
}

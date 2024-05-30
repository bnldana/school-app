<?php

namespace App\Http\Controllers;

use App\Models\Student; // Importation du modèle Student
use App\Models\Group; // Importation du modèle Group
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()  // Affiche la liste de tous les élèves et des groupes
    {
        $students = Student::all(); // Récupère tous les étudiants
        $groups = Group::all(); // Récupère tous les groupes
        return view('index', compact('students', 'groups'));
    }

    public function create() // Affiche le formulaire de création d'un élève avec la liste des groupes
    {
        $groups = Group::all(); // Récupère tous les groupes
        return view('create', compact('groups')); 
    }

    public function store(Request $request) // Enregistre un nouvel élève dans la base de données
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required', 
            'group_id' => 'required|exists:groups,id', // Valide que le groupe existe dans la table groups
        ]);

        Student::create($request->all()); // Crée un nouvel étudiant avec les données validées
        return redirect()->route('students.index'); // Redirige vers la liste des étudiants 
    }
}

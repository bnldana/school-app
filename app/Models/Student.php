<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'date_of_birth', 'address', 'group_id'];

    public $timestamps = false; // Désactive les timestamps automatiques

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}

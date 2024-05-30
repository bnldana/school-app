<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->foreignId('group_id')->constrained('groups')->onDelete('cascade'); // Lier la table élèves à la table classes
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
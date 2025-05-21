<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modelProf extends Model
{
    protected $table = 'profs';
    protected $fillable = ['nom','prenom', 'email', 'matiere'];
 // Specify the table name if it's different from the model name
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public $fillable = ['Matricule','Name','Sur_Name','Gender','Birth_Date','Weight','Height'];

    public function consultations(){
        return $this -> hasMany(Consultation::class, 'patient_id');
    }
}

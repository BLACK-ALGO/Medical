<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    public $fillable = ['matriculepatient','date','complaints','diagnostic','prescription','additional_examinations'];


    public function patient(){
        return $this -> belongsTo(Patient::class);
    }

    
}

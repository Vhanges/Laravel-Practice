<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function jobs(){

        //One to Many
        return $this->hasMany(Jobs::class);
        
    }

    public function user(){

        //One to Many
        return $this->belongsTo(User::class);
        
    }

    
}

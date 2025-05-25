<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /** @use HasFactory<\Database\Factories\TagsFactory> */
    use HasFactory;

    public function jobs(){

        //Many to Many relation ship
        return $this->belongsToMany(Jobs::class, relatedPivotKey: "job_listing_id");

    }

    public function comments(){

        //Many to Many relation ship
        return $this->belongsToMany(Comments::class, relatedPivotKey: "comments_id");

    }
}

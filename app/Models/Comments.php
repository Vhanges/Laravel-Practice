<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /** @use HasFactory<\Database\Factories\CommentsFactory> */
    use HasFactory;

    public function tags() {

        return $this->belongsToMany(\App\Models\Tags::class, foreignPivotKey: "comment_id");

    }
}

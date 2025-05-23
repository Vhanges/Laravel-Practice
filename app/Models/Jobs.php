<?php

namespace App\Models;

use Dom\Attr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobs extends Model
{
    use HasFactory;

    /**
     *  $table used when you are accessing a table using laravel in-house 
     *  function because by default laravel treats the class name
     *  as the table name. Therefore it is important to create table variable and assign 
     *  the actual name of the table you are targeting 
     */


    protected $table = 'job_listing';
    
    /**
     * The $fillable array specifies which attributes can be mass assigned.
     * Defining this helps prevent mass assignment vulnerabilities, where a user might inject unexpected attributes.
     * Example: Without proper protection, someone could override an 'is_admin' field and grant themselves admin access.
     * Always define $fillable to ensure only intended attributes can be mass assigned.
     */

    protected $fillable = ['title', 'salary'];


    /**
     * The $guarded array specifies which attributes **cannot** be mass assigned.
     * If an attribute is listed here, Laravel will block any attempt to modify it via mass assignment.
     * Example: Guarding an 'is_admin' field prevents unauthorized users from elevating their privileges.
     * If $guarded = [] (an empty array), it means **all** attributes are mass assignable, which can be dangerous!
     */

    // protected $guarded = ['is_admin']; // Example attribute that should never be mass assigned

    public function employer() {

        return $this->belongsTo(Employer::class);

    }
}

<?php

namespace App\Models;

use Dom\Attr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Jobs
{
    public static function all():array {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 'PHP 100,000', 
            ],
            [
                'id' => 2,  
                'title' => 'Programmer',
                'salary' => 'PHP 80,000', 
            ],
            [   
                'id' => 3,
                'title' => 'Teacher',
                'salary' => 'PHP 50,000', 
            ],
        ];
    }

    public static function find($id): array {
        $job = Arr::first(self::all(), fn($job) => $job['id'] == $id);
        
        if(! $job) {
            abort(404);
        }

        return $job;


    }
}

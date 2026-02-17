<?php

namespace App\Modules\Courses\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'level',
    ];
}

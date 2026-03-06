<?php

namespace App\Modules\StatusPos\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPos extends Model
{
    protected $table = 'statuspos';
    protected $fillable = [
        'pos',
        'status',
        'start_date',
        'end_date',
        'client_pos',
        'label',
        'status' => 'boolean',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}

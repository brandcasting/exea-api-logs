<?php

namespace App\Modules\SongRequest\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongRequestLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'phone',
        'song_name',
        'album',
        "pos_id",
        "pos",
        "client_id",
        "client",
        "playlist",
    ];
}

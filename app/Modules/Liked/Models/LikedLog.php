<?php

namespace App\Modules\Liked\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedLog extends Model
{
    use HasFactory;

    protected $fillable = [
        "username",
        "email",
        "phone",
        "pos_id",
        "pos",
        "client_id",
        "client",
        "status",
        "value",
        "title",
        "author",
        "name_rule",
    ];
}

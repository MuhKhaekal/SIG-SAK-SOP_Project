<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comments',
        'school_id',
        'user_id',
        'date_post',
        'time_post',
    ];
}

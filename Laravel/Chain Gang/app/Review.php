<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'rating', 'title', 'message', 'created_at', 'updated_at', 'deleted_at'
    ];

}

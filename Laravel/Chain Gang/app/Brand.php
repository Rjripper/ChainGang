<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
        'title', 'created_at', 'updated_at', 'deleted_at'
    ];

}

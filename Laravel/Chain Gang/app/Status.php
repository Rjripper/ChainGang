<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $fillable = [
        'title', 'created_at', 'updated_at', 'deleted_at'
    ];
}

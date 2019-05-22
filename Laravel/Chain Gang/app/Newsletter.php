<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    //
    protected $fillable = [
        'title', 'reference', 'message', 'created_at', 'updated_at', 'deleted_at'
    ];


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //    
    protected $fillable = [
        'sale', 'start_date', 'end_date', 'created_at', 'updated_at', 'deleted_at'
    ];


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WantsNewsletter extends Model
{
    protected $table = "wanting_newsletters";

    protected $fillable = ['email'];
}

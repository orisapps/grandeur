<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gen5 extends Model
{
    //



    public function user()
    {
        return $this->belongsTo(User::class);
    }  
}

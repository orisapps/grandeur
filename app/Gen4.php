<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gen4 extends Model
{



  public function user()
  {
      return $this->belongsTo(User::class);
  }
}

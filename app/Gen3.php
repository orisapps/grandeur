<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gen3 extends Model
{


  public function user()
  {
      return $this->belongsTo(User::class);
  }
}

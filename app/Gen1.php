<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gen1 extends Model
{


  public function user()
  {
      return $this->belongsTo(User::class);
  }
}

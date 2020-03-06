<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gen2 extends Model
{

  public function user()
  {
      return $this->belongsTo(User::class);
  }
}

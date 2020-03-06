<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propertie extends Model
{
    //

   protected $fillable = [
       'image', 'name', 'description', 'document','location','state','status','price','action','send_details',
   ];
}

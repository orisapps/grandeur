<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;

class User extends Authenticatable
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname','mobile', 'username', 'email','birthday','city','state','country',
        'address','banknumber','bank','bankname', 'refid', 'gender', 'gen01','gen02','gen03','gen04','gen05','password','mobile','refid','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'username', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


public function gen1()
    {
        return $this->hasMany(Gen1::class);
    }

public function gen2()
    {
        return $this->hasMany(Gen2::class);
        }

public function gen3()
    {
      return $this->hasMany(Gen3::class);
    }

public function gen4()
    {
      return $this->hasMany(Gen4::class);
    }
public function gen5()
    {
      return $this->hasMany(Gen5::class);
    }

}

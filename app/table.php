<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class table extends Authenticatable
{
    use Notifiable;

    protected $hidden = [
       'remember_token',
    ];
}

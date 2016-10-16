<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    //
    protected $table='adminuser';
    protected $fillable = [
        'user_name', 'user_pass'
    ];
    protected $hidden = [
       'admin_id'
    ];
}

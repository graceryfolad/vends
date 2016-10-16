<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    protected $fillable = ['cat_code','ser_code','ser_name'];
    public function category() {
        $this->hasOne(App\Categories, 'cat_code');
    }
}

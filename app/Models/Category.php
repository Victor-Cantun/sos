<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    /*public function departments(){
        return $this->hasOne('App\Models\Department','id','department_id');
    }*/

}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'photo','rfc','name','phone','cellphone','email','city','state','colony','postalcode','address',
    ];
}

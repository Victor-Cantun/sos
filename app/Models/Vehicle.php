<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'photo','vehiclekey','model','plates','mark','motor','chassis','color','invoicenumber','trafficcard',
    ];
}

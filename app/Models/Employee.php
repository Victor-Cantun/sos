<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'photo','name','surnames','rfc','curp','socialsecurity','email','cellphone','phone','dateofbirth','postalcode','city','state','colony','address','department','dateadmission','bank','bankaccount','employment','primary','secondary','degree','mastery','doctorate','tshirt','pans','cap','laceboot','oilboot','rubberboot','overalls','gloves','lenses','jacket','waterproof','birthcertificate','officialidentification','proffofaddress','doc_curp','doc_rfc','doc_socialsecurity','facebook','twitter','instagram','linkedin','skype','github',
    ];
}

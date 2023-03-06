<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class districtmaster extends Model
{
    use HasFactory;

    public function stateinfo()
    {
        return $this->hasOne('App\Models\state','id','state_id');
    }


    
}
 
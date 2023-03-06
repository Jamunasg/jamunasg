<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    public function stateinfo() {
        return $this->hasOne('App\Models\state','id','state_id');
    }
    public function districtinfo() {
        return $this->hasOne('App\Models\districtmaster','id','district_id')->with('getstate_id');
    }

}

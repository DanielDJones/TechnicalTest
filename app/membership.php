<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class membership extends Model
{
    public $primaryKey  = 'member_ship_id';

    //create many to on relationship with members
    public function member(){
        return $this->belongsTo("APP\members");
    }
}

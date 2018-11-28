<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    /* set table name
    protected $table = "members";
    set primary key
    public $primaryKey = "id";
    set timestamps
    public $timestamps = true;
    */


    //sets the primay key to member_id
    public $primaryKey  = 'member_id';

    //create one to many link between members and membership
    public function membership(){
        return $this->hasMany("App\Membership");
    }

}

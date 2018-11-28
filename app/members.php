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


}

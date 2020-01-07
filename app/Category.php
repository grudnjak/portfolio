<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
    //table name
    protected $table ='categories';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}

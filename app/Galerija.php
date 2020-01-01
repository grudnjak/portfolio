<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerija extends Model
{
    //table name
    protected $table ='galerija';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
    
    public function user(){
        return $this -> belongsTo('App\User');
    }
}

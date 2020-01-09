<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //table name
    protected $table ='projects';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
    
    public function user(){
        return $this -> belongsTo('App\User');
    }

    public function category(){
        return $this -> belongsTo('App\Category');
    }

}

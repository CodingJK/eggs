<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';

    public function myImages(){
        return $this->hasOne('App\Image','candidate','id','title');
    }

    public function fullname(){
        return $this->firstname.' '. $this->lastname;
    }

    public function getProperty($property){
        if ($this->myImages()->first()) {
            return $this->myImages()->first()->$property;
        }else{
            return "Missing...";
        }
    }

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';

    public function myImages(){
        return $this->hasOne('App\photo','candidate','id');
    }
    public function upload_image(){
        return $this->hasOne('App\Upload');
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

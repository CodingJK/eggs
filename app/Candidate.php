<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';

    public function myImages(){
        return $this->hasOne('App\Image','candidate','id','title');
    }
}

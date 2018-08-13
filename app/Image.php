<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table ='images';

    protected $fillable = ['candidate','path','votes','description','title'];
    public function candidate(){
        return $this->hasOne('App\Candidate','id','candidate');
    }
}

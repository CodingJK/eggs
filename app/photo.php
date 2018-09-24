<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table ='images';

    protected $fillable = ['id','candidate','orignal','resize'];
    public function candidate(){
        return $this->hasOne('App\Candidate','id','candidate');
    }
}

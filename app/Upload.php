<?php

namespace App;
use App\Candidate;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
 	 protected $table = 'uploads';

	// // protected $fillable = array('id','original_name');

	public $timestamps = true;
	 
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model {

	protected $table = 'files';
	public $timestamps = true;
	protected $fillable = array('file_path', 'date', 'type', 'id','file_description','file_heading');

	public function user()
	{
		return $this->belongsTo('App\User', 'id');
	}

}
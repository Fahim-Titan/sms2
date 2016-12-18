<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model {

	protected $table = 'results';
	protected $primaryKey = 'Result_id';
	public $timestamps = false;
	protected $fillable = array('id', 'sub_id', 'e_id','quiz2','quiz1','quiz3','quiz4','classPerformance','final');

	public function exam_info()
	{
		return $this->belongsTo('Exam_info', 'e_id');
	}

}
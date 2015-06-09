<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model {

	//
	protected $table = 'blogContents';
	//自定義primary key
	protected $primaryKey = 'blogContents_id';

}

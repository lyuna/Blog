<?php

class Article extends \Eloquent {
	protected $table='articles';
	protected $timestamp=true;
	public function user(){
		return $this->belongsTo('User');
	}
}
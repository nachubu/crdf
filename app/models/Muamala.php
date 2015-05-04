<?php

class Muamala extends \Eloquent {
	protected $table = 'muamala';
	protected $fillable = ['amount-sent'];
	public $timestamps = false;
}
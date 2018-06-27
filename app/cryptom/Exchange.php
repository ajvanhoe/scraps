<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
 	const ACTIVE   = 'true';
	const DEACTIVE = 'false';
    const BLANK    = ' - ';

    protected $table = 'exchanges';

    protected $fillable = ['name', 'url','api','email'];

    protected $guarded = [];
    protected $hidden = [
        'password'
    ];

    /*
    	funkcije tog tipa za flagovanje da li je sajt aktivan ili ne
    public static function deactiveSite(){
        return static::DEACTIVE;
    }

    public function active(){
    	return $this->active = true;
    }
	*/

}



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = "cat";
    protected $primaryKey = "cat_id";
    public $timestaps = false;

    public function allCat(){
    	return $this->orderBy('cat_id','desc')->get();
    }
}

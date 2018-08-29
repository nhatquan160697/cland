<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "story";
    protected $primaryKey = "story_id";
    public $timestamps = false;

    public function allNews(){
    	return $this->orderBy('story_id','desc')->paginate(6);
    }
}

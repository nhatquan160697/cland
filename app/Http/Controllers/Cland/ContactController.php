<?php

namespace App\Http\Controllers\Cland;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Cat;

class ContactController extends Controller
{
	public function __construct(News $mNews, Cat $mCat){
		$this->mNews = $mNews;
		$this->mCat = $mCat;
	}

	public function index(){
		$getAllNews = $this->mNews->allNews();
		$getAllCat = $this->mCat->allCat();
		return view('cland.contact.index',compact('getAllNews','getAllCat'));
	}
}

<?php

namespace App\Http\Controllers\Cland;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Cat;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
	public function __construct(News $mNews, Cat $mCat){
		$this->mNews = $mNews;
		$this->mCat = $mCat;
	}

    public function index(){
    	$getAllNews = $this->mNews->allNews();
		$getAllCat = $this->mCat->allCat();
    	return view('cland.news.index',compact('getAllNews','getAllCat'));
    }

    public function cat($slug, $cid){
        $getAllCat = $this->mCat->allCat(); // lấy tất cả Cat
        $objCat = Cat::find($cid); // lấy id cat
        $objNews = News::where('cat_id', '=', $cid)->get(); // lấy item thuộc id cat
        return view('cland.news.cat',compact('getAllCat','objCat','objNews'));
    }

    public function detail($slug, $id){
        $getAllCat = $this->mCat->allCat();
        $findNews = News::where('story_id', '=', $id)->get();
        //$findCat = News::find($cat_id); cách này không lấy được
        $findCat = DB::table('story')->where('story_id',$id)->value('cat_id'); // lấy giá trị của đối tượng trong mảng -> có thể thêm select hoặc không vì lấy giá trị rồi
        //dd($findCat);
        //$findCat = DB::raw("(SELECT cat_id FROM story WHERE story_id = $id)");
        $relatedNews = News::where('cat_id', '=', $findCat)->where('story_id','<>',$id)->inRandomOrder()->take(3)->get();
        return view('cland.news.detail',compact('findNews','getAllCat','relatedNews'));
    }
}

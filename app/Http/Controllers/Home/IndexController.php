<?php


namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Goods;
use Carbon\Carbon;

class IndexController extends Controller
{

    public function index(){

        $goods = Goods::where('status',1)->orderBy('sort','desc')->limit(7)->get();
        $article = Article::where('release_at','<=',Carbon::now())->orderBy('sort','desc')->limit(4)->get();

        return view('home.mobile.index',compact('goods','article'));
    }

    public function about(){
        return view('home.mobile.about');
    }
}

































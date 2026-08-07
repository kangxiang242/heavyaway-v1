<?php

namespace App\Http\Controllers\Home;

use App\Handlers\ArticleAnchorsHandler;
use App\Models\Anchor;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(Request $request){

        $article = Article::where('release_at','<=',Carbon::now())->where('title','like',"%".$request->keyword."%")->where('img','<>',null)->orderBy('sort','desc')->paginate(10);
        if($request->ajax()){
            return $article->toJson();
        }

        return view('home.mobile.article')->with('article',$article);
    }

    public function show($id){
        $article = Article::find($id);
        $relevant = Article::where('release_at','<=',Carbon::now())->where('id','<>',$id)->orderBy('sort','desc')->limit(3)->get();
        $article->content = app(ArticleAnchorsHandler::class)->setAnchors($article->content,Anchor::get()->toArray());
        return view('home.mobile.article_desc')->with('article',$article)->with('data',$relevant);
    }
}

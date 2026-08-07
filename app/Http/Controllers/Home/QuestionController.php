<?php

namespace App\Http\Controllers\Home;


use App\Models\Question;
use App\Models\QuestionLike;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class QuestionController extends Controller
{
    public function index(){

        $data = Question::where('status',1)->orderBy('sort','desc')->paginate(8);

        return view('home.mobile.question')->with('data',$data);
    }

    public function show($id,Request $request){
        $question = Question::find($id);
        $data = Question::where('id','<>',$id)->where('status',1)->orderBy('sort','desc')->limit(3)->get();
        $like = QuestionLike::where('question_id',$id)->where(function($query)use ($request){
            $query->where('ip',$request->ip())->orWhere('key',$request->userAgent());
        })->first();

        return view('home.mobile.question_desc')->with('question',$question)->with('data',$data)->with('like',$like);
    }

    /**
     * 问题赞和踩
     * @param int $id
     * @param Request $request
     */
    public function like($id,Request $request){
        if($request->action == 1){
            $filed = "good";
        }else{
            $filed = "bad";
        }
        try {
            $like = QuestionLike::where('question_id',$id)->where(function($query)use ($request){
                $query->where('ip',$request->ip())->orWhere('key',$request->userAgent());
            })->first();
            if($like){
                return response()->json(['msg'=>'您已點過'],400);
            }

            DB::transaction(function () use($id,$filed,$request) {
                Question::find($id)->increment($filed);
                QuestionLike::create([
                    'question_id'=>$id,
                    'ip'=>$request->ip(),
                    'user_agent'=>$request->userAgent(),
                    'key'=>md5($request->userAgent()),
                    'is_like'=>$filed=='good'?1:0,
                ]);
            });
            return response()->json(['msg'=>'success']);
        }catch (\Exception $exception){
            return response()->json(['msg'=>'操作失敗'],400);
        }




    }
}

<?php

namespace App\Http\Controllers\Home;

use App\Models\Banner;
use App\Models\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function layout(View $view){
        $uri = request()->route()->uri;
        if($uri == 'check'){
            $uri = 'order/query';
        }
        $data['banner'] = Banner::where('page',$uri)->get();
        $data['seo'] = Seo::where('path',request()->path())->first();
        $view->with('layout',$data);
    }
}

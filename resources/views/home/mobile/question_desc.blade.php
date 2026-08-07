@extends('home.mobile.layout')
@section('title', $question->title)
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/question-desc.css') }}"/>

@stop

@section('content')
    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><a href="/question/">常見問題</a><span class="dayu">></span><span class="hue">{{ \Illuminate\Support\Str::limit($question->title,20)}}</span></p>
    </div>


		<div class="box-content">


			<div class="question-box">

                <div class="title">
                    <h2>{{ $question->title }}</h2>
                    <div class="brief-box">
                        <p class="brief">问答是电子领域的信息交流服务平台,您可以轻 松地与网友做问答的互动,汇集众人的经验与专 长,在问与答的讨论之间,帮助找到满意的答案。</p>
                    </div>
                    <p class="time">
                        {{ $question->created_at->format('Y-m-d') }}
                    </p>
                </div>
                <div class="division">
                    <div class="line line-1"></div>
                    <p>醫師回答</p>
                    <div class="line line-2"></div>
                </div>

                <div class="content">
                    {!! $question->answer !!}
                </div>

                <div class="thumbs">
                    <div class="thumbs-center">
                        <div class="useful">
                            <p>該回答是否對您有幫助?</p>
                        </div>
                        <div class="assist">
                            <div class="zan {{ $like && $like->is_like==1?"zan-activate":"" }}" data-action="1" ><span class="iconfont icon-zan"></span></div>
                            <div class="cai {{ $like && $like->is_like==0?"cai-activate":"" }}" data-action="0"><span class="iconfont icon-zan"></span></div>
                        </div>
                    </div>
                </div>

                <div class="back">
                    <a href="{{ url('question') }}"><button>返回列表</button></a>
                </div>

                <div class="other">
                    <h2>其他人問</h2>
                    <div class="other-row">
                        <ul class="ul-box">
                            @foreach($data as $item)
                            <li><a href="{{ url('question/'.$item->id) }}">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

			</div>
		</div>
@section('script')
    @parent
    <script>
        var is_like = 0;
        $('.zan,.cai').click(function(){

            if(is_like == 1){
                layer.msg("您已點過");
                return false;
            }
            is_like = 1;

            @if(!$like)
                var action = $(this).attr('data-action')
                if(action == 1){
                    $(this).addClass('zan-activate');
                }else{
                    $(this).addClass('cai-activate');
                }
                $.ajax({
                    url:"/question/like/{{ $question->id }}",
                    type : "post",
                    data : {action:action,_token:"{{ csrf_token() }}"},
                    dataType : 'json',
                    success : function(data){

                    },
                    error:function(XMLHttpRequest){
                        var error = XMLHttpRequest.responseText;
                        if (typeof error == 'string') {
                            error = JSON.parse(XMLHttpRequest.responseText);
                        }
                        layer.msg(error.msg);
                    }
                })
            @else
                layer.msg("您已點過");
            @endif
        });

    </script>

@stop
@endsection

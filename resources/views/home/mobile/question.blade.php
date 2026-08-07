@extends('home.mobile.layout')
@section('title', '常見問題')
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/question.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/page.css') }}"/>
@stop

@section('content')

    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><span class="hue">常見問題</span></p>
    </div>
		<div class="box-content">



			<div class="question-box">
                <div class="question-title">
                    <div class="suspension-left">
                        <div class="line"><div class="dot"></div></div>
                    </div>
                    <div>
                        <p class="p1">FAQ</p>
                        <p class="p2">常見問題</p>
                    </div>
                    <div class="suspension-right"><div class="line"><div class="dot"></div></div></div>
                </div>

                <div class="question-list">

                    @foreach($data as $item)
                        <div class="item">
                            <div class="ask"  onclick="window.location.href='{{ url('question/'.$item->id) }}'">
                                <p class="p1">Q : {{ $item->title }}</p>
                                <p class="p2">></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="answer">

                                <p style="    padding-left: 0.5rem;text-indent: -0.44rem;">
                                    <span class="span1">A : </span>
                                    <span class="span2">{!! \Illuminate\Support\Str::limit(strip_tags($item->answer),75 ) !!}</span>
                                </p>
                            </div>
                        </div>

                    @endforeach



                </div>


			</div>



            <div class="pagination-box">
                {{ $data->links() }}
                <div class="clearfix"></div>
            </div>

		</div>
    {{--<script>
        var time = Number("1600062934000");
        function getMyDate(str){
            var Dates = new Date(str);
            var year = Dates.getFullYear();
            var month = Dates.getMonth()+1;
            var date = Dates.getDate();
            var hour = Dates.getHours();
            var minute = Dates.getMinutes();
            var second = Dates.getSeconds();
            return year+"-"+month+"-"+date+" "+hour+":"+minute+":"+second
        };
        setInterval(function() {
             time = time+1000;
            console.log(getMyDate(time));
        }, 1000);
    </script>--}}
@endsection

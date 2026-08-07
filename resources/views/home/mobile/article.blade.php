@extends('home.mobile.layout')
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/acticle.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/page.css') }}"/>
@stop

@section('content')

    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><span class="hue">瘦身資訊</span></p>
    </div>
		<div class="box-content">



			<div class="related">
                @foreach($article as $item)
                    <div class="news">
                        <div class="left">
                            <p><img src="{{ asset('uploads/'.$item->img) }}" alt="{{ $item->img_alt }}"></p>

                        </div>
                        <div class="right">
                            <p class="p-title"><a href="{{ url('article/'.$item->id) }}">{{ $item->title }}</a></p>
                            <p  class="p-sub-title">
                                {{ $item->intro }}
                            </p>
                            <div class="button">
                                <a href="{{ url('article/'.$item->id) }}"><button type="button">閱讀全文</button></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                @endforeach



			</div>


            <div class="pagination-box">{{ $article->links() }}</div>
		</div>



@section('script')
    @parent
    <script>
        if(document.documentElement.clientWidth < 960){
            var page = 1;
            var last_page = {{ $article->lastPage() }};
            var scroll = 1;
            function upCallback(page){
                $('.box-content').append('<div class="bottom-loading">正在加载...</div>')
                scroll = 0;
                $.ajax({
                    url:"{{ url('article') }}?page="+page,
                    method:"get",
                    dataType:'json',
                    success:function(data){
                        var tmp;
                        last_page = data.last_page;
                        for(var i = 0;i<data.data.length;i++){
                            tmp = '<div class="news"><div class="left"><p><img src="/uploads/'+data.data[i].img+'" alt=""></p></div><div class="right"><p class="p-title">'+data.data[i].title+'</p><p  class="p-sub-title"></p><div class="button"><a href="/article/"'+data.data[i].id+'"><button type="button">閱讀全文</button></a></div><div class="clearfix"></div></div><div class="clearfix"></div></div>';
                            $('.related').append(tmp);
                        }
                        $('.bottom-loading').remove();
                        scroll = 1;
                    }
                });
            }

            $(window).scroll(function(){
                if(scroll < 1){
                    return false;
                }
                if ($(window).scrollTop() + $(window).height() == $(document).height()) {
                    if(last_page > page){
                        page = page+1

                        upCallback(page);

                    }else{
                        /*$('.box-content').append('<div class="bottom-loading">没有了</div>')*/
                        scroll = 0;
                    }

                }
            });
        }
    </script>
@stop
@endsection

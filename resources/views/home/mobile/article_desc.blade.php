@extends('home.mobile.layout')
@section('title', $article->seo_title?:$article->title)
@section('keywords', $article->seo_key_word)
@section('description', $article->seo_description)
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/acticle_desc.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/article-content.css') }}"/>
@stop

@section('content')
    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><a href="/article/">瘦身資訊</a><span class="dayu">></span><span class="hue">{{ \Illuminate\Support\Str::limit($article->title,20) }}</span></p>
    </div>


		<div class="box-content">


			<div class="acticle-title">
				<h1>{{ $article->title }}</h1>
			</div>

			<div class="acticle-time">
				2020-06-11
			</div>

			<div class="acticle-content">

                {!! $article->content !!}
                {{--<div class="product-related">
                    <div class="img-box">
                        <img src="{{ asset('static/img/test.png') }}" alt="吸油丸品牌介紹" class="product-img">
                    </div>
                    <div class="textRight">
                        <p class="title">纖貝麗吸油丸（美國）</p>
                        --}}{{--<p class="product-sub-title">【商品】羅氏鮮（奧利）</p>
                        <p class="product-sub-title">【规格】120mg/颗42颗/盒</p>--}}{{--
                        <p class="product-outline">罗氏鲜减肥药持续减重「强效装」 二周期90天用量，助你持续减重。罗氏鲜排油强效装原价为10800。</p>
                        <p class="product-price"><span>$</span>10<span class="origin-price"><span>$</span>200</span> <span class="discount">折扣:5%</span> </p>
                        <div class="bottom"><a href="/product/3"><button type="button">立即購買</button></a></div>
                    </div>
                    <div class="clearfix"></div>
                </div>--}}
            </div>

			<div class="related">
				<div ><h2>相關閱讀</h2></div>

                @foreach($data as $item)
				<div class="news" onclick="window.location.href='{{ url('article/'.$item->id) }}'">
					<div class="left"><p>{{ $item->title }}</div>
					<div class="right">
						<p><img src="{{ asset('uploads/'.$item->img) }}" alt="{{ $item->img_alt }}"></p>
						<p class="p-time">{{ $item->release_at->format('Y-m-d') }}</p>
					</div>
					<div class="clearfix"></div>
				</div>
                @endforeach

			</div>

		</div>

@endsection

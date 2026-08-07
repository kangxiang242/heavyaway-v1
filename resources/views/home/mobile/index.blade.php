@extends('home.mobile.layout')
@section('title', '首页')
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}"/>
@stop

@section('content')
		<div class="content">
			<div class="pc-content">
			<div class="content-row brand-row">
				<div class="row-header">
					<div class="header-center">
						<div class="suspension-left">
							<div class="line"><div class="dot"></div></div>
						</div>
						<p class="sub-title">BRAND INTRODUCTION</p>
						<p class="main-title">品牌簡介</p>
						<div class="suspension-right"><div class="line"><div class="dot"></div></div></div>
					</div>
				</div>

				<div class="pc-brand">
					<div class="pc-brand-left">
						<div class="brand-img">
							<img src="{{ asset('static/img/jjt.jpg') }}" alt="">

						</div>
					</div>

					<div class="pc-brand-right">
						<div class="brand-text">

							羅氏鮮(Xenical)是商品名，它的學名是orlistat，英文
							名稱是Xenical。羅氏鮮是目前唯一臨床上被證實會排
							油的產品，只要飲食中含油脂，羅氏鮮就會將三分之
							一油脂排出，而且排油量會與飲食的油脂含量成正比。
							由于脂肪吸收減少，所以油溶性維他命有時會吸收困
							難，需要加強補充。

						</div>

						<div class="brand-button-div">
                            <a href="{{ url('about') }}/"><button type="button">了解更多</button></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>



			</div>

			<div class="content-row">
				<div class="row-header">
					<div class="header-center">
						<div class="suspension-left"><div class="line"><div class="dot"></div></div></div>
						<p class="sub-title">WHY TO CHOOSE XENICAL</p>
						<p class="main-title">為什麼選擇羅氏鮮</p>
						<div class="suspension-right"><div class="line"><div class="dot"></div></div></div>
					</div>
				</div>
				<div class="row-box">
					<p class="title">選錯瘦身法 耗時又傷身</p>
					<div class="desc">
						<div class="ys-item">

							<img class="radius5" src="{{ asset('static/img/s1.jpg') }}" >
							<p>節食瘦身</p>
							<p>斷食易反彈</p>
						</div>
						<div class="ys-item">
							<img class="radius5" src="{{ asset('static/img/s2.jpg') }}" >
							<p>
                                運動瘦身
                            </p>
							<p>長期易受傷</p>
						</div>
						<div class="ys-item">
							<img class="radius5" src="{{ asset('static/img/s3.jpg') }}" >
							<p>
                                手術治療
                             </p>
							<p>昂貴且風險</p>
						</div>
					</div>
				</div>

				<div class="row-box">
					<p class="title mobile-mimi-title">羅氏鮮的秘密</p>
					<div class="mimi">
						<div class="pc-mimi-p">
							<p class="title pc-mimi-title">羅氏鮮的秘密</p>
							<p class="mini-desc">"脂肪酶抑製劑"因為抓住了肥胖的核心要素——脂肪，
	直接阻斷脂肪吸收，讓體外的脂肪進不來，而體內脂
	肪則慢慢被消耗掉。所以有明顯的排油減肥效果，而
	且不影響其他營養物質的吸收利用，同時，因為藥物
	不進入血液，不參與全身代謝，所以很安全。
							</p>
						</div>
						<img src="{{ asset('static/img/mm.jpg') }}" >
						<div class="clearfix"></div>
					</div>
				</div>

			</div>


			<div class="content-row content-row-mg-bottom">
				<div class="row-header">
					<div class="header-center">
						<div class="suspension-left"><div class="line"><div class="dot"></div></div></div>
						<p class="sub-title">ADVANTAGE OF XENCIAL</p>
						<p class="main-title">羅氏鮮四大優勢</p>
						<div class="suspension-right"><div class="line"><div class="dot"></div></div></div>
					</div>
				</div>
				<div class="ys-div ys-full">
					<div class="ys-center">
						<div class="ys-row">
							<div class="img">
								<img src="{{ asset('static/img/y1.jpg') }}">
								<div class="clearfix"></div>
							</div>
							<div class="desc">
								<p class="p1">真正治療肥胖</p>
								{{--<p class="p2">
									國際一線阻脂減肥藥，
								</p>
								<p class="p2">
									7小時排油，一粒見效！
								</p>
								<p class="p2">
									快速減肥！真正治療肥胖，
								</p>
								<p class="p2">
									持久瘦身不復發！
								</p>--}}
                                <p class="p2">
                                    是藥才敢說治療，是藥才真的效果好！國際一線阻脂減肥藥，7小時排油，一粒見效！治療肥胖！
                                </p>

							</div>

						</div>

						<div class="ys-row">
							<div class="img">
								<img src="{{ asset('static/img/y2.jpg') }}">
							</div>
							<div class="desc">
								<p class="p1">只幹掉脂肪</p>
								<p class="p2">
                                    精準鎖定脂肪，只幹掉脂肪，不影響其他營養物質的吸收和代謝，無需用健康換美麗。減油、減脂、減肥、減重。效果穩定不反彈。
								</p>


							</div>
						</div>

						<div class="ys-row">
							<div class="img">
								<img src="{{ asset('static/img/y3.jpg') }}">
							</div>
							<div class="desc">
								<p class="p1">安全不傷身</p>
								<p class="p2">
                                    只在腸道起作用，不進入血液循環，不參與機體代謝，不傷肝腎，不損傷中樞神經，不節食、不腹瀉、不乏力，安全性毋庸置疑。
								</p>


							</div>
						</div>

						<div class="ys-row">
							<div class="img">
								<img src="{{ asset('static/img/y4.jpg') }}">
							</div>
							<div class="desc">
								<p class="p1">懶人也能瘦</p>
								<p class="p2">
                                    無需節食，無需運動，讓你貪吃不胖，懶惰也能美！
								</p>


							</div>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>

			</div>


			<div class="content-row">
				<div class="row-header">
					<div class="header-center">
						<div class="suspension-left"><div class="line"><div class="dot"></div></div></div>
						<p class="sub-title">SHOPPING ONLINE</p>
						<p class="main-title"><a href="{{ url('product') }}/">線上訂購</a></p>
						<div class="suspension-right"><div class="line"><div class="dot"></div></div></div>
					</div>
				</div>
				<div class="xs-div mobile-xs-div">
                    @foreach($goods as $item)
					<div class="xs-box">
						<div class="goods-img">
							<!-- <p class="right-ideo">体验装</p> -->
                            <a href="{{ url('product/'.$item->id) }}"><img src="{{ asset('uploads/'.$item->img) }}" alt="{{ $item->img_alt }}"></a>
						</div>
						<p class="goods-title"><a href="{{ url('product/'.$item->id) }}">{{ $item->title }}</a></p>
						<p class="goods-price"><span class="fh">$</span>{{ $item->price }}<span class="span-decoration"><span class="fh1">$</span>{{ $item->original_price }}</span></p>

						<p class="goods-discount" {{ $item->original_price > $item->price?'':'style=visibility:hidden;' }}>優惠折扣:{{ round(100-($item->price/$item->original_price)*100) }}%</p>

						<div class='buy-button'>
                            <a href="{{ url('/order/place/'.$item->id) }}"><button type="button">立即購買</button></a>
						</div>
					</div>
                    @endforeach

				</div>

				<div class="xs-div pc-xs-div">
					<div class="pc-row-box">
						<div class="pc-row">

                            @foreach($goods as $k=>$item)
                                @if($k>=3)
                                    @break;
                                @endif
                                <div class="xs-box">
                                    <div class="goods-img">
                                        <!-- <p class="right-ideo">体验装</p> -->
                                        <a href="{{ url('product/'.$item->id) }}"><img src="{{ asset('uploads/'.$item->img) }}" alt="{{ $item->img_alt }}"></a>
                                    </div>
                                    <p class="goods-title"><a href="{{ url('product/'.$item->id) }}">{{ $item->title }}</a></p>
                                    <p class="goods-price"><span class="fh">$</span>{{ $item->price }}<span class="span-decoration"><span class="fh1">$</span>{{ $item->original_price }}</span></p>
                                    <p class="goods-discount" {{ $item->original_price > $item->price?'':'style=visibility:hidden;' }}>优惠折扣:{{ round(100-($item->price/$item->original_price)*100) }}%</p>
                                    <div class='buy-button'>
                                        <a href="{{ url('/order/place/'.$item->id) }}"><button type="button">立即購買</button></a>
                                    </div>
                                </div>
                            @endforeach

						</div>

						<div class="pc-row">
                            @foreach($goods as $k=>$item)
                                @if($k<=2)
                                    @continue;
                                @endif
                                <div class="xs-box">
                                    <div class="goods-img">
                                        <!-- <p class="right-ideo">体验装</p> -->
                                        <a href="{{ url('product/'.$item->id) }}"><img src="{{ asset('uploads/'.$item->img) }}" alt="{{ $item->img_alt }}"></a>
                                    </div>
                                    <p class="goods-title"><a href="{{ url('product/'.$item->id) }}">{{ $item->title }}</a></p>
                                    <p class="goods-price"><span class="fh">$</span>{{ $item->price }}<span class="span-decoration"><span class="fh1">$</span>{{ $item->original_price }}</span></p>
                                    <p class="goods-discount" {{ $item->original_price > $item->price?'':'style=visibility:hidden;' }}>優惠折扣:{{ round(100-($item->price/$item->original_price)*100) }}%</p>
                                    <div class='buy-button'>
                                        <a href="{{ url('/order/place/'.$item->id) }}"><button type="button">立即購買</button></a>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>

			</div>

			<div class="content-row">
				<div class="row-header">
					<div class="header-center">
						<div class="suspension-left"><div class="line"><div class="dot"></div></div></div>
						<p class="sub-title">SLIMMING NEWS</p>
                        <p class="main-title"><a href="{{ url('article') }}/">瘦身資訊</a></p>
						<div class="suspension-right"><div class="line"><div class="dot"></div></div></div>
					</div>
				</div>
				<div class="ss-div">
					<ul class="ss-ul">
                        @foreach($article as $item)
						<li>
							<div class="news">
								<div class="photo"><img src="{{ asset('uploads/'.$item->img) }}" alt="{{ $item->img_alt }}"></div>
								<div class="intro">
								    <p><a href="{{ url('article/'.$item->id) }}">{{ $item->title }}</a></p>
									<div class="intro-button">
                                        <a href="{{ url('article/'.$item->id) }}"><button type="button">閱讀全文</button></a>
									</div>
								</div>

							</div>

						</li>
                        @endforeach

						<div class="clearfix"></div>
					</ul>

					<div class="clearfix"></div>

				</div>
			</div>

			</div>

		</div>
@endsection

@extends('home.mobile.layout')
@section('title', $data->title)
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/product_desc.css') }}"/>
@stop

@section('content')
    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><a href="/product/">線上訂購</a><span class="dayu">></span><span class="hue">{{ $data->title }}</span></p>
    </div>
		<div class="box-content">


			<div class="content">
				<div class="product">
					<div class="product-img">
						<img src="{{ asset('uploads/'.$data->img) }}" alt="{{ $data->img_alt }}" >
					</div>
					<div class="product-info">
						<p class="title">{{ $data->title }}</p>
						<p class="product-sub-title">【商品】羅氏鮮（奧利）</p>
						<p class="product-sub-title">【规格】120mg/颗42颗/盒</p>
						<p class="product-outline">{{ $data->brief }}</p>
						<p class="product-price"><span>$</span>{{ $data->price }}
                            @if($data->original_price>$data->price)
                            <span class="origin-price"><span>$</span>{{ $data->original_price }}</span> <span class="discount">折扣:{{ round(100-($data->price/$data->original_price)*100) }}%</span>
                            @endif
                        </p>
						<div class="bottom">

                            <a href="{{ url('order/place/'.$data->id) }}"><button type="button">立即購買</button></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="describe">
					<div class="packaging">
						<p>包裝絕對隱密外觀絕無相關之任何字樣宅配人員並不會知道您所訂購的商品，請安心選購</p>
					</div>

					<div class="text">
                        <p class="orlistat">
                            羅氏鮮(Xenical)是商品名，它的學名是orlistat，英文名
                            稱是Xenical。羅氏鮮是目前唯一臨床上被證實會排油
                            的產品，只要飲食中含油脂，羅氏鮮就會將三分之一油
                            脂排出，而且排油量會與飲食的油脂含量成正比。由于
                            脂肪吸收減少，所以油溶性維他命有時會吸收困難，需
                            要加強補充。
                        </p>

                        <div class="drugs-desc">
                            <div class="for-title"><p>藥品說明</p></div>
                            <div class="for-desc">
                                <div class="desc-left">
                                    <div class="row"><p class="">羅氏鮮（奧利司他膠囊）</p></div>
                                    <div class="row"><p class="p1">【 類      別 】</p><p class="p2">消化系統其他藥物</p></div>
                                    <div class="row"><p class="p1">【 中文別名 】</p><p class="p2">奧利司他</p></div>
                                    <div class="row"><p class="p1">【 英 文 名 】</p><p class="p2">xenical</p></div>
                                    <div class="row"><p class="p1">【 英文別名 】</p><p class="p2">Orlistat Capsules</p></div>
                                    <div class="row">
                                        <p class="p1">【 成      分 】</p>
                                        <p class="p2">
                                            <span class="ellipsis">本品的主要活性成分為奧利司...</span>
                                            <span class="reveal hide">本品的主要活性成分為奧利司他。賦形劑包括 ：微晶纖維素，羥乙酸淀粉鈉，聚乙烯吡咯烷酮，十二烷硫酸鈉和滑石。膠囊外殼含有明膠、靛藍二磺酸鈉(E132)，二氧化鈦。</span>
                                        </p>
                                        <div class="zhankai" data-action="0"><span>+</span></div>
                                    </div>
                                    <div class="row"><p class="p1">【 規      格 】</p><p class="p2">膠囊劑 120mg</p></div>
                                </div>
                                <div class="desc-right">
                                    <img src="{{ asset('static/img/women.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="for-img pc-for-pills"><img src="{{ asset('static/img/pills.jpg') }}" alt=""></div>
                        </div>

                        <div class="drugs-desc">
                            <div class="for-title"><p>用藥說明</p></div>
                            <div class="for-desc pc-for-desc">

                                <div class="row">
                                    <p class="p1">【 藥 理 】</p>
                                    <p class="p2">
                                        <span class="ellipsis">羅氏鮮是長效和強效的特異性...</span>
                                        <span class="reveal hide">羅氏鮮是長效和強效的特異性胃腸道脂肪酶抑制劑，它通過與胃和小腸腔內胃脂肪酶和胰脂肪酶的活性絲氨酸部位形成共價鍵使酶失活而發揮治療作用，失活的酶不能將食物中的脂肪，主要是甘油三酯水解為可吸收的游離脂肪酸和單酰基甘油。未消化的甘油三酯不能被身體吸收，從而減少熱量攝入，控制體重。該藥無需通過全身吸收發揮藥效。</span>
                                    </p>
                                    <div class="zhankai" data-action="0"><span>+</span></div>
                                </div>
                                <div class="row">
                                    <p class="p1">【 藥 動 學 】</p>
                                    <p class="p2">
                                        <span class="ellipsis">吸收對體重正常和肥胖志愿者...</span>
                                        <span class="reveal hide">吸收



對體重正常和肥胖志愿者的研究表明，機體對奧利司他的吸收量極微，口服后8小時測不出完整的奧利司他血漿濃度(< 5 ng/mL)。通常治療劑量的奧利司他全身吸收極其有限，無蓄積，血漿中僅偶爾可測出完整的奧利司他，濃度很低(< 10 ng/mL或0.02 ?m)。



分布 ：由于奧利司他幾乎不被吸收，所以難以測定其分布容積，全身的藥代動力學也不能檢測。在體外，99%以上的奧利司他與血漿蛋白結合(脂蛋白、白蛋白是主要的結合蛋白)。奧利司他很少與紅細胞結合。



代謝



動物試驗提示，奧利司他的代謝主要集中在胃腸道壁。在肥胖患者中進行的研究顯示，在極少部分被全身吸收的藥物成分中有兩種主要的代謝產物，M1(4-環內酯環水解產物)和M3(M1附著一個N-甲酰基亮氨酸裂解產物)占全部血漿濃度的42%。M1和M3具有一個開放的b-內酯環對脂酶抑制活性極弱(與奧利司他相比，分別低1000倍和2500倍)。治療劑量時，M1和M3的抑酶活性及血漿濃度很低(平均為M1-26 ?g/mL和M3-108 ?g/mL)，因此這兩種代謝產物不具有藥理意義。
清除 ：對正常體重和肥胖者的研究表明，未吸收的藥物主要通過糞便排出體外。所服用劑量的大約97%是從糞便排泄，其中83%是原形奧利司他，奧利司他所有相關物的累計腎排泄量低于2%。藥物徹底排出(糞便和尿液)需要3-5天。對于正常體重者和肥胖受試者，奧利司他的代謝是很相似的。奧利司他、M1和M3均可以經膽汁排泄。測定糞便中脂肪含量表明，本藥的藥效在給藥后24-48小時即可顯現，停止治療后48-72小時，糞便中脂肪含量便恢復到治療前水準。</span>

                                    </p>
                                    <div class="zhankai" data-action="0"><span>+</span></div>
                                </div>


                            </div>

                        </div>

                        <div class="drugs-desc syz-height">
                            <div class="for-desc">

                                <div class="row">
                                    <p class="p1">【 適 應 癥 】</p>
                                    <p class="p2">
                                        <span class="ellipsis">羅氏鮮結合微低熱能飲食適...</span>
                                        <span class="reveal hide">羅氏鮮結合微低熱能飲食適用于肥胖和體重超重者包括那些已經出現與肥胖相關的危險因素的患者的長期治療。羅氏鮮具有長期的體重控制（減輕體重、維持體重和預防反彈）的療效。服用羅氏鮮可以降低與肥胖相關的危險因素和與肥胖相關的其它疾病的發病率，包括高膽固醇血癥、2型糖。</span>
                                    </p>
                                    <div class="zhankai" data-action="0"><span>+</span></div>
                                </div>
                            </div>
                            <div class="for-img"><img src="{{ asset('static/img/syz.jpg') }}" alt=""></div>
                        </div>

                        <div class="drugs-desc">
                            <div class="for-desc">

                                <div class="row">
                                    <p class="p1">【 用法用量 】</p>
                                    <p class="p2">
                                        <span class="ellipsis">成人：推薦劑量為餐時或餐后...</span>
                                        <span class="reveal hide">成人：推薦劑量為餐時或餐后一小時內服120mg膠囊一粒。如果有一餐未 進或食物中不含脂肪，則可省略一次服藥。長期服用羅氏鮮的治療效果 （包括控制體重和改善危險因素）可的持續。病人的膳食應營養均衡，微低 熱能，大約30%熱能來自脂肪，食物中應富含水果和蔬菜。脂肪、碳水化 合物和蛋白質的攝入應分布于每日三餐。沒有證據表明超過每日三次/每次 120mg能增強療效。對老年人無需調整劑量。 如果您有任何疑問，請遵醫囑。</span>
                                    </p>
                                    <div class="zhankai" data-action="0"><span>+</span></div>
                                </div>
                            </div>
                            <div class="for-img"><img src="{{ asset('static/img/yongliang.jpg') }}" alt=""></div>
                        </div>

                        <div class="drugs-desc">
                            <div class="for-desc">

                                <div class="row">
                                    <p class="p1">【 不良反應 】</p>
                                    <p class="p2">
                                        <span class="ellipsis">主要引起胃腸道不良反應，其...</span>
                                        <span class="reveal hide">主要引起胃腸道不良反應，其與藥物封鎖攝入脂肪的吸收的藥理作用有關。 常見不良反應為：油性斑點，胃腸排氣增多，大便緊急感，脂肪（油）性 大便，脂肪瀉，大便次數增多和大便失禁。通常在服用羅氏鮮的病人中較 多出現的胃腸道急性反應有：腹痛/腹部不適、胃腸脹氣、水樣便、軟便、 直腸痛/直腸部不適、牙齒不適、牙齦不適。觀察到的其它少見不良事件 有：上呼吸道感染、下呼吸道感染、流行性感冒、頭痛、月經失調、焦慮、 疲勞、泌尿道感染。偶有對本品才敏的報道。主要的臨床表現為瘙癢、皮 疹、蕁麻疹、血管神經性水腫和過敏反應。</span>
                                    </p>
                                    <div class="zhankai" data-action="0"><span>+</span></div>
                                </div>
                            </div>
                            <div class="for-img"><img src="{{ asset('static/img/blfy.jpg') }}" alt=""></div>
                        </div>

                        <div class="drugs-desc">
                            <div class="for-desc">

                                <div class="row">
                                    <p class="p1">【 注意事項 】</p>
                                    <p class="p2">
                                        <span class="ellipsis">經過最多不超過兩年的奧利司...</span>
                                        <span class="reveal hide">經過最多不超過兩年的奧利司他治療，大部分病 人維生素A、D、E、K和 β胡蘿卜素水準仍在正常范圍內。為了保證有足夠的營養物質，可以考慮補 充復合維生素。應該教育病人遵從膳食指導（見劑量和用法）。當羅氏鮮與 高脂成分飲食（比如一天2000卡熱能中，超過30%的熱能來源于67克以上 的脂肪供給）合用時，發生胃腸道事件（見不良反應）的可能懷會增加。每 日脂肪攝入量應分布在三頓主餐中。當羅氏鮮與脂肪含量很高的某一餐同服 時，發生胃腸道反應的可能性增加。在2型糖尿病患者中，羅氏鮮在導致體 重減輕的同時常常伴隨著血糖控制的改善，從而可能或需要減少口服降糖藥 的劑量（比如磺酰脲類藥物）。 羅氏鮮與環孢霉素聯合用藥時可造成后者血漿濃度的降低。因此建議在羅氏 鮮與環孢霉素聯合用藥時應對后者的血清濃度進行比通常情況下更為密切的 監測（見藥物相互作用）。患慢性吸收不良綜合征或膽汁郁積癥及對奧利司 他或藥物制劑中任何一種其他成分過敏的患者禁用。</span>
                                    </p>
                                    <div class="zhankai" data-action="0"><span>+</span></div>
                                </div>
                            </div>
                            <div class="for-img"><img src="{{ asset('static/img/zysx.jpg') }}" alt=""></div>
                        </div>
                        <div class="drugs-desc">
                            <div class="for-desc">

                                <div class="row">
                                    <p class="p1">【 相互作用 】</p>
                                    <p class="p2">
                                        <span class="ellipsis">在藥代動力學研究中，沒有...</span>
                                        <span class="reveal hide">在藥代動力學研究中，沒有觀察到奧利司他與酒精、地高辛、二甲雙胍、硝苯地平、口服避孕藥、苯妥英類，普伐他汀或華法令之間有藥物相互作用。已經觀察到在與羅氏鮮同服時，維生素D、E和β胡蘿卜素的吸收減少。如果需要補充復合維生素，應在服用羅氏鮮至少2小時后服用。或在睡覺前服用。與羅氏鮮同時服用時，已觀察到環孢霉素A的血漿濃度降低。因此，當羅氏鮮和環孢霉素A同時給藥時，應加強對環孢霉素A血漿濃度的監測（見注意事項）。</span>
                                    </p>
                                    <div class="zhankai" data-action="0"><span>+</span></div>
                                </div>
                            </div>
                            {{--<div class="for-img"><img src="{{ asset('static/img/yongliang.jpg') }}" alt=""></div>--}}
                        </div>

					</div>
				</div>
			</div>


		</div>
@section('script')
    @parent
    <script>
        $('.zhankai').click(function(){
            var action = $(this).attr('data-action');
            if(action == 0){
                $(this).find("span").text("-");
                $(this).attr('data-action',1);
                $(this).prev().find('.ellipsis').hide();
                $(this).prev().find('.reveal').show();
            }else{
                $(this).find("span").text("+");
                $(this).attr('data-action',0);
                $(this).prev().find('.ellipsis').show();
                $(this).prev().find('.reveal').hide();
            }
        });
    </script>
@stop

@endsection

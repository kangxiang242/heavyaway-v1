



function SelCity(obj, e) {

$('.peisong_xiala').css({
    'transform':' rotate(180deg)',
    '-webkit-transform':' rotate(180deg)',
})
    var ths = obj;
    var dal = '<div class="_citys"><div id="citygroup"><div id="_citysheng" class="_citys0"><span>--請選擇縣市--</span><span class="span_city_show span_city_show1"></span></div></div><div id="_citys0" class="_citys1"></div><div style="display:none" id="_citys1" class="_citys1"></div><div style="display:none" id="_citys2" class="_citys1"></div></div>';

    Iput.show({
        id: ths,
        event: e,
        content: dal,
        width: "470"
    });

    /*var hcity = $('input[name="hcity"]').val()
    var hproper = $('input[name="hproper"]').val()
    var harea = $('input[name="harea"]').val()
    if(harea){
        var tmp = '<div id="_citysheng" class="_citys0"><span>--請選擇縣市--</span><span class="span_city_show span_city_show1" onclick="span_city_show1()">'+hcity+'</span></div>';
         tmp += '<div id="_citysheng" class="_citys0"><span>--請選擇地區--</span><span class="span_city_show span_city_show2" onclick="span_city_show2()">'+hproper+'</span></div>';
        tmp += '<div id="_citysheng" class="_citys0"><span>--請選擇路段--</span><span class="span_city_show span_city_show3 onclick="span_city_show3()"">'+harea+'</span></div>';
        $('#citygroup').html(tmp);

        return false;
    }else if(hproper){
        var tmp = '<div id="_citysheng" class="_citys0"><span>--請選擇縣市--</span><span class="span_city_show span_city_show1">'+hcity+'</span></div>';
        tmp += '<div id="_citysheng" class="_citys0"><span>--請選擇地區--</span><span class="span_city_show span_city_show2">'+hproper+'</span></div>';
        $('#citygroup').html(tmp);

        $("#_citys1 a,#_citys2 a").removeClass("AreaS");
        var ar = getArea2($('input[name="hproper"]').attr('data-id'));
        $("#_citys2 a").remove();
        if (ar == '') Iput.colse();
        $("#_citys2").append(ar);
        $("._citys1").hide();
        $("._citys1:eq(2)").show();
        $("#_citys2 a").click(function() {

            $("#_citys2 a").removeClass("AreaS");
            $(this).addClass("AreaS");
            var lev = $(this).data("name");
            $(".span_city_show3").text(lev);
            if (document.getElementById("harea") == null) {
                var hcitys = $('<input>', {
                    type: 'hidden',
                    name: "harea",
                    "data-id": $(this).data("id"),
                    id: "harea",
                    val: lev
                });
                $(ths).after(hcitys)
            } else {
                $("#harea").val(lev);
                $("#harea").attr("data-id", $(this).data("id"))
            }
            var bc = $("#hcity").val();
            var bp = $("#hproper").val();
            ths.value = bc + "/" + bp + "/" + $(this).data("name");
            Iput.colse()

        })
        return false;
    }else if(hcity){
        var tmp = '<div id="_citysheng" class="_citys0 _xz0"><span>--請選擇縣市--</span><span class="span_city_show span_city_show1">'+hcity+'</span></div>';
        $('#citygroup').html(tmp);
        $("#_citys1 a,#_citys2 a").removeClass("AreaS");

        var g = getCity2($('input[name="hcity"]').attr('data-id'));
        $("#_citys1 a").remove();
        $("#_citys1").append(g);
        $("._citys1").hide();
        $("._citys1:eq(1)").show();
        $("#_citys0 a,#_citys1 a,#_citys2 a").removeClass("AreaS");
        $("#_citys1 a").click(function() {
            $("#_citys1 a,#_citys2 a").removeClass("AreaS");
            $(this).addClass("AreaS");
            var lev = $(this).data("name");
            $(".span_city_show2").text(lev);
            $("._citys1").css("height","300px");
            if (document.getElementById("hproper") == null) {
                var hcitys = $('<input>', {
                    type: 'hidden',
                    name: "hproper",
                    "data-id": $(this).data("id"),
                    id: "hproper",
                    val: lev
                });
                $(ths).after(hcitys)
            } else {
                $("#hproper").attr("data-id", $(this).data("id"));
                $("#hproper").val(lev)
            }
            var bc = $("#hcity").val();
            ths.value = bc + "/" + $(this).data("name");
            var ar = getArea($(this));
            $("#_citys2 a").remove();
            if (ar == '') Iput.colse();
            $("#_citys2").append(ar);
            $("._citys1").hide();
            $("._citys1:eq(2)").show();
            $("#_citys2 a").click(function() {

                $("#_citys2 a").removeClass("AreaS");
                $(this).addClass("AreaS");
                var lev = $(this).data("name");
                $(".span_city_show3").text(lev);
                if (document.getElementById("harea") == null) {
                    var hcitys = $('<input>', {
                        type: 'hidden',
                        name: "harea",
                        "data-id": $(this).data("id"),
                        id: "harea",
                        val: lev
                    });
                    $(ths).after(hcitys)
                } else {
                    $("#harea").val(lev);
                    $("#harea").attr("data-id", $(this).data("id"))
                }
                var bc = $("#hcity").val();
                var bp = $("#hproper").val();
                ths.value = bc + "/" + bp + "/" + $(this).data("name");
                Iput.colse()
            })
        })
        return false;
    }*/





    $("#cColse").click(function() {
        Iput.colse()
    });
    var tb_province = [];
    var b = province;
    for (var i = 0,
    len = b.length; i < len; i++) {
        tb_province.push('<a data-id="' + b[i]['id'] + '" data-name="' + b[i]['name'] + '" title="' + b[i]['name'] + '">' + b[i]['name'] + '</a>')
    }
    $("#_citys0").append(tb_province.join(""));
    $("#_citys0 a").click(function() {
        var g = getCity($(this));
        $("#_citys1 a").remove();
        $("#_citys1").append(g);
        $("._citys1").hide();
        $("._citys1:eq(1)").show();
        $("#_citys0 a,#_citys1 a,#_citys2 a").removeClass("AreaS");
        $(this).addClass("AreaS");
        var lev = $(this).data("name");
        ths.value = $(this).data("name");
		$(".span_city_show1").text(lev);
		$("._citys1").css("height","330px");
        if (document.getElementById("hcity") == null) {
            var hcitys = $('<input>', {
                type: 'hidden',
                name: "hcity",
                "data-id": $(this).data("id"),
                id: "hcity",
                val: lev
            });
            $(ths).after(hcitys)
        } else {
            $("#hcity").val(lev);
            $("#hcity").attr("data-id", $(this).data("id"))
        }
        $("#_citys1 a").click(function() {
            $("#_citys1 a,#_citys2 a").removeClass("AreaS");
            $(this).addClass("AreaS");
            var lev = $(this).data("name");
			$(".span_city_show2").text(lev);
			$("._citys1").css("height","300px");
            if (document.getElementById("hproper") == null) {
                var hcitys = $('<input>', {
                    type: 'hidden',
                    name: "hproper",
                    "data-id": $(this).data("id"),
                    id: "hproper",
                    val: lev
                });
                $(ths).after(hcitys)
            } else {
                $("#hproper").attr("data-id", $(this).data("id"));
                $("#hproper").val(lev)
            }
            var bc = $("#hcity").val();
            ths.value = bc + "/" + $(this).data("name");
            var ar = getArea($(this));
            $("#_citys2 a").remove();
            if (ar == '') Iput.colse();
            $("#_citys2").append(ar);
            $("._citys1").hide();
            $("._citys1:eq(2)").show();
            $("#_citys2 a").click(function() {

                $("#_citys2 a").removeClass("AreaS");
                $(this).addClass("AreaS");
                var lev = $(this).data("name");
				$(".span_city_show3").text(lev);
                if (document.getElementById("harea") == null) {
                    var hcitys = $('<input>', {
                        type: 'hidden',
                        name: "harea",
                        "data-id": $(this).data("id"),
                        id: "harea",
                        val: lev
                    });
                    $(ths).after(hcitys)
                } else {
                    $("#harea").val(lev);
                    $("#harea").attr("data-id", $(this).data("id"))
                }
                var bc = $("#hcity").val();
                var bp = $("#hproper").val();
                ths.value = bc + "/" + bp + "/" + $(this).data("name");
                Iput.colse()

                $('.peisong_xiala').css({
                    'transform':' rotate(360deg)',
                    '-webkit-transform':' rotate(360deg)',
                })
            })



        })
        $('.span_city_show1').click(function(){
            $("#cColse").click(function() {
                Iput.colse()
            });
            var tb_province = [];
            var b = province;
            for (var i = 0,
                     len = b.length; i < len; i++) {
                tb_province.push('<a data-id="' + b[i]['id'] + '" data-name="' + b[i]['name'] + '" title="' + b[i]['name'] + '">' + b[i]['name'] + '</a>')
            }
            $("#_citys0").append(tb_province.join(""));
            $("#_citys0").show();
            $("#_citys1").hide();
            $("#_citys2").hide();
            $(".span_city_show2").parent().remove();
            $(".span_city_show3").parent().remove();
            return false;
        });

        $('.span_city_show2').click(function(){
            $("#_citys0").hide();
            $("#_citys1").show();
            $("#_citys2").hide();
            $(".span_city_show3").parent().remove();
            //$("input[name='hproper']").remove();
            return false;
        });


    })

}





function getCity(obj) {
    var c = obj.data('id');
    var e = province;
    var f = [];
    var g = '';
    for (var i = 0; i < e.length; i++) {
        if (e[i]['id'] == parseInt(c)) {
            f = e[i]['son'];
            break
        }
    }
    for (var j = 0; j < f.length; j++) {
        g += '<a data-id="' + f[j]['id'] + '" data-name="' + f[j]['name'] + '" title="' + f[j]['name'] + '">' + f[j]['name'] + '</a>'
    }
    /* $("#_citysheng").html('--請選擇地區--'); */
	$("#citygroup").append('<div id="_citysheng" class="_citys0"><span>--請選擇地區--</span><span class="span_city_show span_city_show2"></span></div>');
    return g
}
function getCity2(id) {
    var c = id;
    var e = province;
    var f = [];
    var g = '';
    for (var i = 0; i < e.length; i++) {
        if (e[i]['id'] == parseInt(c)) {
            f = e[i]['son'];
            break
        }
    }
    for (var j = 0; j < f.length; j++) {
        g += '<a data-id="' + f[j]['id'] + '" data-name="' + f[j]['name'] + '" title="' + f[j]['name'] + '">' + f[j]['name'] + '</a>'
    }
    /* $("#_citysheng").html('--請選擇地區--'); */
    $("#citygroup").append('<div id="_citysheng" class="_citys0"><span>--請選擇地區--</span><span class="span_city_show span_city_show2"></span></div>');
    return g
}
function getArea(obj) {
    var c = obj.data('id');
    var e = province;
    var f = [];
    var g = '';
    for (var i = 0; i < e.length; i++) {
        for (var j = 0; j < e[i]['son'].length; j++) {
            if (e[i]['son'][j]['id'] == parseInt(c) && e[i]['son'][j]['sec']) {
                f = e[i]['son'][j]['sec'];
                break
            }
        }
    }
    if (f.length) {
        for (var k = 0; k < f.length; k++) {
            g += '<a data-id="' + f[k]['id'] + '" data-name="' + f[k]['name'] + '" title="' + f[k]['name'] + '">' + f[k]['name'] + '</a>'
        }
    }
    /* $("#_citysheng").html('请选择区县'); */

	$("#citygroup").append('<div id="_citysheng" class="_citys0"><span>--請選擇縣市--</span><span class="span_city_show span_city_show3"></span></div>');
    return g
}
function getArea2(id) {
    var c = id;
    var e = province;
    var f = [];
    var g = '';
    for (var i = 0; i < e.length; i++) {
        for (var j = 0; j < e[i]['son'].length; j++) {
            if (e[i]['son'][j]['id'] == parseInt(c) && e[i]['son'][j]['sec']) {
                f = e[i]['son'][j]['sec'];
                break
            }
        }
    }
    if (f.length) {
        for (var k = 0; k < f.length; k++) {
            g += '<a data-id="' + f[k]['id'] + '" data-name="' + f[k]['name'] + '" title="' + f[k]['name'] + '">' + f[k]['name'] + '</a>'
        }
    }
    /* $("#_citysheng").html('请选择区县'); */

    $("#citygroup").append('<div id="_citysheng" class="_citys0"><span>--請選擇縣市--</span><span class="span_city_show span_city_show3"></span></div>');
    return g
}

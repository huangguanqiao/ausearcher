var index = 0;
var isshow = true;
var w = $('body').width();


var navh = (0 - ($('.nav_c').outerHeight() - 520));

$('.navup').css('visibility', 'hidden');
$('.navdown').css('visibility', 'hidden');
$(".hovertreepage .content .item").eq(0).show().siblings().hide();
$(".hovertreepage .nav_c div").click(function() {
    var $this = $(this);
    var count = $(".hovertreepage .nav_c div").length;
    index = $this.index();
    var l = -(index * 440);
    $(".hove" + "rtreepage .nav_c div").removeClass("on");
    $(".hovertreepage .nav_c div").eq(index).addClass("on");
   
    $(".hovertreepage .content .item").eq(index).show().siblings().hide();
    $('.m_nav span').html($(".hovertreepage .nav_c div span").eq(index).html());
    var n_top = $(".nav_c").position().top;

    if (w < 948) {
        $('.m_nav').click();
    }

    var navid = $(this).attr('id');
    $.cookie("navid", navid, { expires: 3650 });

});
if (w >= 948)
    $(".hovertreepage .content .item").eq(0).find('.searchTxt').focus();



$('.m_nav span').html($(".hovertreepage .nav_c div span").eq(0).html());
var navid = $.cookie("navid");
if (navid) {
    $('#' + $.cookie("navid")).click();
}
$('.content .item').each(function() {
    var typeid = $(this).attr('id');

    $(this).find('.input-group button').click(function() {
        var id = $(this).attr('id');
        $.cookie(typeid, id, { expires: 3650 });
    });


    $(this).find('.input-group-btn .btn-submit').click(function() {

        var key = $(this).parent().parent().find('.searchTxt').val();
        var i = $(this).parent().parent().find('.searchTxt').attr('index');
        var url = $(this).parent().parent().parent().find('.input-group button').eq(i).attr('url');
        if (w < 948) {
            var murl = $(this).parent().parent().parent().find('.input-group button').eq(i).attr('murl');
            if (murl != '')
                url = murl;
        }

        var sname = $(this).parent().parent().parent().find('.input-group button').eq(i).html();
        var method = $(this).parent().parent().parent().find('.input-group button').eq(i).attr('method');
        var param = $(this).parent().parent().parent().find('.input-group button').eq(i).attr('param');
        if (url.indexOf('@key@') > 0)
            url = url.replace(/@key@/g, encodeURI(key));

        $('#form1').attr('method', method);
        $('#form1').attr('action', url);
        var ps = param.split('|');

        for (var i = 0; i < ps.length; i++) {
            var kv = ps[i].split('=');
            if (kv.length == 2) {
                var k = kv[0];
                var v = kv[1];
                if (v == "@key@")
                    v = key;
                $('#p' + (i + 1)).attr('name', k);
                $('#p' + (i + 1)).val(v);
            }
            else {
                $('#p' + (i + 1)).attr('name', ps[i]);
                $('#p' + (i + 1)).val(key);
            }
        }
        $('#form1').submit();
		
		for (var i = 0; i < ps.length; i++) {
			$('#p' + (i + 1)).attr("name","");
			$('#p' + (i + 1)).val("");
		}

		
    });
    $(this).find('.searchTxt').attr('placeholder', $(this).find('.input-group button').eq(0).attr('title'));
    $(this).find('.searchTxt').attr('index', '0');
    $(this).find('.input-group button').click(function() {
        $(this).siblings().removeClass('btn-select');
        $(this).addClass('btn-select');
        $(this).parent().parent().find('.searchTxt').attr('placeholder', $(this).attr('title'));
        $(this).parent().parent().find('.searchTxt').attr('index', $(this).index());
    });

    var cid = $.cookie(typeid);
    if (cid) {
        $('#' + cid).click();
    }

});
function showmenu() {
    if (w < 948) {
        if (isshow)
            $('.hovertreepage .left').stop().animate({ "left": 0 }, 500);
        else
            $('.hovertreepage .left').stop().animate({ "left": -90 }, 500);
        isshow = !isshow;
    }
}
$('.m_nav').click(function() { showmenu(); });
$('.content').click(function() { isshow = false; showmenu(); });

document.onkeydown = function(event) {
    var e = event || window.event || arguments.callee.caller.arguments[0];
    if (e && e.keyCode == 13) {
        if(index!=0)
            $('.content .item').eq(index).find('.btn-submit').click();
    }
};
function tag() {
    if (w < 948) {
        var temp_w = parseInt(w / 150);
        $('.top-tab2 li a').width(parseInt((w - 22 - 4) / temp_w));
    }
    else {
        $('.top-tab2 li a').width(150);
    }
}

$(window).resize(function() {
    w = $('body').width();
    tag();
    setsize();
});
tag();



function setsize() {
    if (w < 948) {
        var temp_w = parseInt((w) / 144);
        var t_w = (w - 50 - temp_w * 10) / temp_w;
        $('.content-ul li').width(t_w);
        $('.widget-content .aleft').width(parseInt(t_w) - 44);
    }
    else {
        $('.content-ul li').width(144);
    }
}

if (!$.cookie("navid")) {
    $('#nav_1').click();
}

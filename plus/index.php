<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>AUSearcher 聚合搜索</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
		<script src="js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<style type="text/css">
			body {
				overflow: visible;
				padding-top: 100px;
				padding-bottom: 70px;
			}
			
			button{
				margin-top: 5px;
			}				
			
			.ad {
				width: 300px;
				margin: 0 auto;				
			}
		</style>
		<link rel="icon" href="img/search_cat_32px.png" />
		<link rel="icon" href="img/search_cat_72px.png"" sizes="72x72" />
		<link rel="apple-touch-icon-precomposed" href="img/search_cat_72px.png"" />
		<meta name="msapplication-TileImage" content="img/search_cat_72px.png"" />
		
	</head>
	<body>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        							<span class="sr-only">Toggle navigation</span>
        							<span class="icon-bar"></span>
        							<span class="icon-bar"></span>
        							<span class="icon-bar"></span>
      							</button>
								<a class="navbar-brand" href="https://ausearcher.com/">AUSearcher</a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="inactive">
										<a href="https://ausearcher.com/">直达搜索</a>
									</li>
									<li class="active">
										<a href="https://plus.ausearcher.com/">聚合搜索</a>
									</li>
								</ul>		
								
								
								<form class="navbar-form navbar-right" role="search">
									
									<div class="form-group">	
							          <label  for="inNew">在新窗口中打开</label>
									  <input id="inNew" type="checkbox" />
									  &nbsp;&nbsp;
							        </div>
							        <!--div class="form-group">	
							          <label  for="searchselect">默认搜索引擎</label>
									  <select id="searchselect" onchange="" class="form-control">							  
										  <option value="baidu">百度</option>
										  <option value="google">谷歌</option>
										  <option value="sogou">搜狗</option>
										  <option value="bing">必应</option>
										  <option value="googlem">谷歌镜像</option>
									  </select>
							        </div-->							        
							     </form>
								<!--p class="navbar-text navbar-right">
								<a href="" class="navbar-link" title=""></a>
				</p-->
								
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container-fluid -->
					</nav>
					<div class="jumbotron text-center" style="background: transparent; height: 150px;">
						<h2>AUSearcher 聚合搜索</h2>
						<h4>一站式全能搜索网站</h4>
					</div>
				</div>
				<form onsubmit="return false">
				<div class="row clearfix">
					<div class="col-md-2 column">
					</div>
					<div class="col-md-8 column text-center" style="margin: 5px;5px;5px;5px;">
						<div class="form-group">
							<input type="text" class="form-control  input-lg" placeholder="输入要搜索的内容" id="content" name="content"/>
						</div>
					</div>
					<div class="col-md-2 column">
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-12 column text-center">
						<!--div style="margin:10px;">
							<button type="button" id="pro" class="btn btn-success">搜索者Pro</button>
							<button type="button" id="google" class="btn btn-info">谷歌</button>
							<button type="button" id="baidu" class="btn btn-danger">百度</button>
							<button type="button" id="sogou" class="btn btn-warning">搜狗</button>
							<button type="button" id="bing" class="btn btn-info">必应</button>
							<button type="button" id="zhihu" class="btn btn-primary">知乎</button>	
						
						</div-->	

						<div>
							<button type="button" id="cyzy" class="btn btn-success">常用资源</button>
							<button type="button" id="yymp3" class="btn btn-success">音乐MP3</button>
							<button type="button" id="wdsj" class="btn btn-info">文档书籍</button>
							<button type="button" id="eshs" class="btn btn-primary">E书混搜</button>							
							<button type="button" id="spdy" class="btn btn-danger">视频电影</button>
							<button type="button" id="bkzs" class="btn btn-warning">百科知识</button>
							<button type="button" id="xzhs" class="btn btn-primary">下载混搜</button>
							<button type="button" id="wphs" class="btn btn-primary">网盘混搜</button>

						</div>

						<div>
							<button type="button" id="ptezt" class="btn btn-info">PTE专题</button>	
							<button type="button" id="xzck" class="btn btn-info">写作参考</button>
							<button type="button" id="csdx" class="btn btn-info">计算机类</button>						
							<button type="button" id="bczl" class="btn btn-info">编程资料</button>	
							<button type="button" id="lxlt" class="btn btn-info">留学论坛</button>	
							<button type="button" id="bdjw" class="btn btn-info">不懂就问</button>
							<button type="button" id="cdhj" class="btn btn-info">词典合集</button>
							<button type="button" id="xspj" class="btn btn-info">小视频集</button>							
						</div>							
						
						<div>
							<button type="button" id="azcs" class="btn btn-success">澳洲超市</button>
							<button type="button" id="azyf" class="btn btn-info">澳洲药房</button>
							<button type="button" id="azbh" class="btn btn-warning">澳洲百货</button>
							<button type="button" id="azds" class="btn btn-danger">澳洲电商</button>
							<button type="button" id="azjh" class="btn btn-info">澳洲酒行</button>
							<button type="button" id="dzcp" class="btn btn-primary">电子产品</button>
							<button type="button" id="ssfz" class="btn btn-success">时尚服装</button>
							<button type="button" id="zbss" class="btn btn-info">珠宝首饰</button>
							<!--button type="button" id="bgjj" class="btn btn-danger">办公家具</button-->
						</div>	
						
						<div>
							<button type="button" id="zczp" class="btn btn-warning">职场招聘</button>
							<button type="button" id="ywzx" class="btn btn-info">英文资讯</button>
							<button type="button" id="zwzx" class="btn btn-primary">中文资讯</button>
						</div>
					</div>
				</div>				
				</form>
				
			</div>
		</div>
		
		
        <script type="text/javascript">
                var content = "";
                var inNew = getCookie("inNew");
                var searcher = getCookie("searcher");
                //var state=getCookie("AD");
                $(document).ready(function () {

                    //广告开关
                    /*
                    if (state!=""){
                        if(state=="false"){
                            $("#ad").hide();
                        }else{
                            $("#ad").show();
                        }
                    }
                    else {
                            setCookie("AD",true,30);
                            $("#ad").show();
                        }
                    */

                    //默认搜索引擎
                    if (searcher == "") {
                        setSearcher("baidu");
                    } else {
                        setSearcher(searcher);
                    }

                    //是否在新窗口打开
                    if (inNew != "") {
                        if (inNew == "true") {
                            $("#inNew").attr("checked", "true");
                        } else {
                            $("#inNew").removeAttr("checked");
                        }
                    }
                    setInNew();
                });

                /*
                $("#SwitchAD").click(function() {
                    var state=getCookie("AD");
                    if(state=="true"){
                        setCookie("AD",false,30);
                        $("#ad").hide();
                    }else{
                        setCookie("AD",true,30);
                        $("#ad").show();
                    }
                });
                */

                $("#searchselect").change(function () {
                    setSearcher($("#searchselect").val());
                })

                $("#inNew").change(function () {
                    setInNew();
                })

                $("#content").keypress(function (event) {
                    if (event.keyCode == '13') {
                        $("#" + searcher).trigger("click");
                    }
                });

				$("#pro").click(function () {
                    getcontent();
                    window.open("https://pro.ausearcher.com/web?q=" + content, inNew);
                });
                $("#baidu").click(function () {
                    getcontent();
                    window.open("http://www.baidu.com/s?wd=" + content, inNew);
                });
                $("#google").click(function () {
                    getcontent();
                    window.open("http://www.google.com/search?q=" + content, inNew);
                });
                $("#sogou").click(function () {
                    getcontent();
                    window.open("https://www.sogou.com/web?query=" + content, inNew);
                });
                $("#bing").click(function () {
                    getcontent();
                    window.open("http://cn.bing.com/search?q=" + content, inNew);
                });
                $("#zhihu").click(function () {
                    getcontent();
                    window.open("https://www.zhihu.com/search?q=" + content, inNew);
                });
                $("#panc").click(function () {
                    getcontent();
                    window.open("http://www.panc.cc/s/" + content + "/td_0", inNew);
                });
                $("#minecraft").click(function () {
                    getcontent();
                    window.open("https://minecraft-zh.gamepedia.com/" + content, inNew);
                });
                $("#jd").click(function () {
                    getcontent();
                    window.open("http://search.jd.com/Search?enc=utf-8&keyword=" + content, inNew);
                });
                $("#taobao").click(function () {
                    getcontent();
                    window.open("https://s.taobao.com/search?q=" + content, inNew);
                });
				$("#wphs").click(function () {
                    getcontent();
                    window.open("/wphs.php?q=" + content, inNew);
                });
				$("#yymp3").click(function () {
                    getcontent();
                    window.open("/yymp3.php?q=" + content, inNew);
                });
				$("#wdsj").click(function () {
                    getcontent();
                    window.open("/wdsj.php?q=" + content, inNew);
                });
				$("#spdy").click(function () {
                    getcontent();
                    window.open("/spdy.php?q=" + content, inNew);
                });
				$("#xzck").click(function () {
                    getcontent();
                    window.open("/xzck.php?q=" + content, inNew);
                });
				$("#bkzs").click(function () {
                    getcontent();
                    window.open("/bkzs.php?q=" + content, inNew);
                });
				
				//comming soon
				$("#azcs").click(function () {
                    getcontent();
                    window.open("/azcs.php?q=" + content, inNew);
                });
				$("#azyf").click(function () {
                    getcontent();
                    window.open("/azyf.php?q=" + content, inNew);
                });
				$("#azds").click(function () {
                    getcontent();
                    window.open("/azds.php?q=" + content, inNew);
                });
				$("#azbh").click(function () {
                    getcontent();
                    window.open("/azbh.php?q=" + content, inNew);
                });
				$("#azjh").click(function () {
                    getcontent();
                    window.open("/azjh.php?q=" + content, inNew);
                });
				$("#dzcp").click(function () {
                    getcontent();
                    window.open("/dzcp.php?q=" + content, inNew);
                });
				$("#ssfz").click(function () {
                    getcontent();
                    window.open("/ssfz.php?q=" + content, inNew);
                });
				$("#zbss").click(function () {
                    getcontent();
                    window.open("/zbss.php?q=" + content, inNew);
                });
				$("#bgjj").click(function () {
                    getcontent();
                    window.open("/bgjj.php?q=" + content, inNew);
                });
				$("#zczp").click(function () {
                    getcontent();
                    window.open("/zczp.php?q=" + content, inNew);
                });
				$("#ywzx").click(function () {
                    getcontent();
                    window.open("/ywzx.php?q=" + content, inNew);
                });
				$("#zwzx").click(function () {
                    getcontent();
                    window.open("/zwzx.php?q=" + content, inNew);
                });
				//entend
				$("#cyzy").click(function () {
                    getcontent();
                    window.open("/cyzy.php?q=" + content, inNew);
                });
				$("#eshs").click(function () {
                    getcontent();
                    window.open("/eshs.php?q=" + content, inNew);
                });
				$("#xzhs").click(function () {
                    getcontent();
                    window.open("/xzhs.php?q=" + content, inNew);
                });
				$("#csdx").click(function () {
                    getcontent();
                    window.open("/csdx.php?q=" + content, inNew);
                });
				$("#bczl").click(function () {
                    getcontent();
                    window.open("/bczl.php?q=" + content, inNew);
                });
				$("#lxlt").click(function () {
                    getcontent();
                    window.open("/mglx.php?q=" + content, inNew);
                });
				//2
				$("#bdjw").click(function () {
                    getcontent();
                    window.open("/bdjw.php?q=" + content, inNew);
                });
				$("#xspj").click(function () {
                    getcontent();
                    window.open("/xspj.php?q=" + content, inNew);
                });
				$("#cdhj").click(function () {
                    getcontent();
                    window.open("/cdhj.php?q=" + content, inNew);
                });
				$("#ptezt").click(function () {
                    getcontent();
                    window.open("/ptezt.php?q=" + content, inNew);
                });

                //获取url中的参数
                function getUrlParam(name) {
                    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                    var r = window.location.search.substr(1).match(reg);
                    if (r != null) return decodeURI(r[2]); return null;
                }
                //获取输入框内容
                function getcontent() {
                    content = encodeURIComponent($("#content").val());
                }

                //设置名为cname值为cvalue存活期为exdays天的cookie
                function setCookie(cname, cvalue, exdays) {
                    var d = new Date();
                    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                    var expires = "expires=" + d.toGMTString();
                    document.cookie = cname + "=" + cvalue + "; " + expires;
                }

                //获取名为cname的cookie值
                function getCookie(cname) {
                    var name = cname + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i].trim();
                        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
                    }
                    return "";
                }


                //设定是否在新窗口中打开
                function setInNew() {
                    setCookie("inNew", $("#inNew").is(':checked'), 30);
                    inNew = $("#inNew").is(':checked') ? "_blank" : "_self";
                }

                //设置默认搜索引擎
                function setSearcher(value) {
                    searcher = value;
                    $("#searchselect").val(value);
                    setCookie("searcher", value, 30);
                }
        </script>

	</body>


	
</html>

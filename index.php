<!DOCTYPE html>
<html>
	<!--
	作者：nux_sphen@163.com
	时间：2016-03-18
	描述：
	-->
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="http://abner.ren/img/favicon.ico" media="screen" />
		<meta charset="utf-8" />
		<meta name="description" content="只为更好的搜索---整合google，bing，百度搜索资源">
		<meta name="keywords" content="搜索,百度,google,bing,联合搜索,谷歌,联合搜索,union,unionsearch,UnionSearch,unionSearch,abner,abner.ren,http://abner.ren">
		<title>
			UnionSearch
		</title>
		<link rel="stylesheet" href="css/index.css" />
		<style type="text/css">input {
	transition: all 0.30s ease-in-out;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	border: #35a5e5 1px solid;
	border-radius: 50px;
	outline: none;
}

input:focus {
	box-shadow: 0 0 10px rgba(81, 203, 238, 1);
	-webkit-box-shadow: 0 0 10px rgba(81, 203, 238, 1);
	-moz-box-shadow: 0 0 10px rgba(81, 203, 238, 1);
}

a:hover {
	background: rgba(39, 154, 187, 1);
}</style>
		<script type="text/javascript">function toSearch() {
	var text = document.getElementById("input");
	if (text.value == "") {
		alert("搜索数据为空！"); //可以继续跳转到本页
	} else {
		document.getElementById("myform").submit();
	}
}</script>
	</head>
	<body background="img/background.jpg">
		<div id="border">
			<div id="top">
			</div>
			<div id="middle">
				<form method="get" action="mainSearch.php" id="myform">
					<div id="middle_1">
						<input type="text" name="input" placeholder="请将网页编码设置为自动检测" value="" speech x-webkit-speech  id="input"
						style="width: 400px; height: 25px; font-size: 20px;" />
						<input
						type="button" value="Go Search" style="height: 31px; margin-top: 0px;"
						onclick="toSearch();" />
					</div>
					<div id="middle_2">
						<input type="radio" name="searchwhat" id="googlebing"
						value="1" />
						google+bing
						<input type="radio" name="searchwhat"
						id="googlebaidu" value="2"  />
						google+百度
						<input
						type="radio" name="searchwhat" id="bingbaidu" value="3" checked="checked"/>
						bing+百度
					</div>
				</form>
			</div>
			<div id="bottom">
				<div style="width: 750px; margin:0 auto; margin-top: 50px;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<script
					type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cspan id='cnzz_stat_icon_1258054571'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1258054571%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
					<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1360363374&amp;site=qq&menu=yes" rel="nofollow" target="_blank">
						<img src="http://wpa.qq.com/pa?p=2:1360363374:3" alt="点击和我聊天" />
					</a>
					<a href="http://abner.ren/blog" target="_blank">
						<img src="img/abner_blog.jpg"/>
					</a>&nbsp;
					<a href="http://abner.ren/netlink" target="_blank">
						<img src="img/NetLink.jpg"/>
					</a>
					<a href="http://tool.oschina.net/" target="_blank">
						<img src="img/onlinec.jpg"/>
					</a>
					<a href="codeSearch.php" target="_blank">
						<img src="img/code.jpg"/>
					</a>
				</div>
				<div style="width: 300px; margin:0 auto;">
					<a href="http://webscan.360.cn/index/checkwebsite/url/abner.ren">
						<img border="0" src="http://img.webscan.360.cn/status/pai/hash/278040061e75f0bcc7b1fa9bbb54c987"/>
					</a>
					<a href="http://www.scholarnet.cn" target="_blank">
						<img src="img/xueshu.jpg"/>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>

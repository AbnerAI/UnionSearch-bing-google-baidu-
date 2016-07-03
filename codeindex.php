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
<meta name="description" content="只为更好的搜索---代码搜索">
 <meta name="keywords" content="搜索,百度,google,bing,联合搜索,谷歌,联合搜索,union,unionsearch,UnionSearch,unionSearch,abner,abner.ren,http://abner.ren">
<title>UnionSearch</title>
<link rel="stylesheet" href="css/index.css" />
<style type="text/css">
input{
	transition:all 0.30s ease-in-out;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	
	border:#35a5e5 1px solid;
	border-radius:50px;
	outline:none;
}
input:focus{
	box-shadow:0 0 10px rgba(81, 203, 238, 1);
	-webkit-box-shadow:0 0 10px rgba(81, 203, 238, 1);
	-moz-box-shadow:0 0 10px rgba(81, 203, 238, 1);
}

a:hover{background:rgba(39, 154, 187, 1);}
</style>
<script type="text/javascript">
function toSearch() {
	var text = document.getElementById("input");
	if (text.value == "") {
		alert("搜索数据为空！"); //可以继续跳转到本页
	} else {
		document.getElementById("myform").submit();	
	}
}
	function toSearchbing() {
		var text = document.getElementById("inputbing");
		if (text.value == "") {
			alert("搜索数据为空！"); //可以继续跳转到本页
		} else {
			document.getElementById("myformbing").submit();	
		}
}</script>
</head>
<body background="img/codeback.jpg">
<div id="border">
<div id="top"></div>
<div id="middle">
<form method="get" action="codemainSearch.php" id="myform">
<div id="middle_1"><input type="text" name="input" placeholder="searchcode/googlecode" value="" speech x-webkit-speech  id="input"
	style="width: 400px; height: 25px; font-size: 20px;" /> <input
	type="button" value="Code" style="height: 31px; margin-top: 0px;"
	onclick="toSearch();" /></div>
</form>

<form method="get" action="codemainSearchBing.php" id="myformbing">
<div id="middle_1"><input type="text" name="inputbing" placeholder="bingcode" value="" speech x-webkit-speech  id="inputbing"
	style="width: 400px; height: 25px; font-size: 20px;" /> <input
	type="button" value="Code" style="height: 31px; margin-top: 0px;"
	onclick="toSearchbing();" /></div>
</form>
</div>
<div id="bottom">
<div style="width: 700px; margin:0 auto; margin-top: 50px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://developers.google.com/" target="_blank"><img src="img/google.jpg"/></a>
<a href="scholar.php" target="_blank"><img src="img/scholar.jpg"/></a>
</div>
</div>
</div>
</body>
</html>

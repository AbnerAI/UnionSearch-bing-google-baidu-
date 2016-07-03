<?php 
$input_ = $_GET['input'];
echo '<!DOCTYPE html>
<html>
		<head>
		<meta charset="utf-8" />
		<title>
			CodeSearch
		</title>
		<link rel="stylesheet" href="css/index.css" />
		<script type="text/javascript">function toSearch() {
	var text = document.getElementById("input");
	if (text.value == "") {
		alert("搜索数据为空！"); //可以继续跳转到本页
	} else {
		document.getElementById("myformbing").submit();
	}
}</script>
	</head>
	<body style="background-color:#3B83C0">
			<div style="margin-top:0px;margin-left:0px">
				<form method="get" action="codemainSearchbing.php" target="blank" id="myform">
					<div style="margin-top:0px;width:500px;margin:auto">
					<b><font color="white">代码搜索</font></b><input type="text" name="inputbing"  value="'.$input_.'" id="input" style="width: 400px;height: 25px;font-size: 20px;" />
						<input type="button" value="Go Search"  style="height: 31px;margin-top:0px;display:none;" onclick="toSearch();" />
					</div>
					
				</form>
			</div>
	</body>
</html>
';


?>
<html>
<head>
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
</head>

</html>
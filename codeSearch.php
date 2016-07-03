<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>CodeSearch</title>
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
<body >
<font size="6" color="red">Please make sure that your network is properly connected to the foreign network before you use it! (including Google)</font>
<form action="check.php" method="post">
<input type="text" placeholder="请输入密码" name="code">
<input type="submit" value="LoginToCodeSearch"  >
</form>
<?php 
		if(isset($_GET['wrong'])){
			echo "wrong password.";
		}
	
	
	?>
</body>
</html>
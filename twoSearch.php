<?php 
echo '<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		waiting...
	</body>
</html>';
$input_ = $_GET['input'];
$searchWhat= $_GET['searchwhat'];
if ($searchWhat==2) {
	//下面要特别注意引号的嵌套！！！
echo '<script> 
window.location.href="https://www.baidu.com/s?wd='.$input_.'"</script>';
}
else if($searchWhat==1)
{
	
		//下面要特别注意引号的嵌套！！！
echo '<script> 
window.location.href="http://cn.bing.com/search?q='.$input_.'"</script>';
} 
else if($searchWhat==3)
{
		//下面要特别注意引号的嵌套！！！
echo '<script> 
window.location.href="https://www.baidu.com/s?wd='.$input_.'"</script>';
}

?>

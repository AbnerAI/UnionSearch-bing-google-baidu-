<?php
session_start ();
$searchWhat = "wrong";
$input_ = $_GET ['input'];
if (isset($_GET['searchwhat']))
{
   $_SESSION ['realname'] = $_GET['searchwhat'];
}
$searchWhat= $_SESSION ['realname'];
?>
<head>
<title>UnionSearch</title>
<link rel="shortcut icon" type="image/x-icon" href="http://abner.ren/img/favicon.ico" media="screen" />

</head>
<frameset rows="38px,*" target="_self" framespacing="0" style="padding:0px;margin:0px;border:none">
	<frame src="oneSearch.php?input=<?php echo $input_;?>" scrolling="no" frameborder="0"/>
	<frameset cols="50%,50%" framespacing="0">
		<frame src="twoSearch.php?input=<?php echo $input_;?>& searchwhat= <?php echo $searchWhat;?>" noresize="noresize" scrolling="auto" frameborder="0" style="border:1px #3B83C0 solid;width:100%;padding:0px;margin:0px;border:none;"/>
		<frame src="threeSearch.php?input=<?php echo $input_;?>& searchwhat= <?php echo $searchWhat;?>" noresize="noresize" scrolling="auto" frameborder="0"  style="border:1px #3B83C0 solid;width:100%;padding:0px;margin:0px;border:none;"/>
	</frameset>
</frameset>

<noframes>
	sorry,your brower can not sopport the frameset of html5!
</noframes>
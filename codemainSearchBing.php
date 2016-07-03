<?php
$input_ = $_GET['inputbing'];
?>
<head>
<title>CodeSearch</title>
<link rel="shortcut icon" type="image/x-icon" href="http://abner.ren/img/favicon.ico" media="screen" />
</head>
<frameset rows="38px,*" framespacing="0" style="padding:0px;margin:0px;border:none">
	<frame src="codeonebing.php?input=<?php echo $input_;?>" scrolling="no" frameborder="0"/>
		<frame  src="codesearchbing.php?input=<?php echo $input_;?>" noresize="noresize" scrolling="auto" frameborder="0" style="border:1px #3B83C0 solid;width:100%;padding:0px;margin:0px;border:none;"/>
	
	
</frameset>
<noframes>
	sorry,your brower can not sopport the frameset of html5!
</noframes>
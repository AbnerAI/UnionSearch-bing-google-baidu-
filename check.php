<?php
if(isset($_POST['code'])){
$con=new mysqli( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
$con->query("set names gbk");
$stmt=$con->stmt_init();
$sql="select * from codesearch where codesearch=? ";
$stmt->prepare($sql);
$stmt->bind_param("s",$codesearch);
$codesearch=$_POST["code"];
$stmt->execute();
		if($stmt->fetch()){
		header("location:codeindex.php");
	 }
	 else
	 {
	 	 header("location:codeSearch.php?wrong=1");
	 }
	 
	}

	
?>
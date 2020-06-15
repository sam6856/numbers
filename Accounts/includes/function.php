<?php
	if(isset($_POST['submit'])){
		ini_set('display_errors',1);
		error_reporting(E_ALL);
		$from=$_POST['email'];
		$to="whentin20@gmail.com";
		$subject="Email from Numbers Accounting";
		$message=$_POST['message'];
		$headers="From: ".$from;
		mail($to,$subject,$message,$headers);
	}
?>
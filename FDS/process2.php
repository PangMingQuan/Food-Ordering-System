<?php

	$logout = "Login.html";
	$cancel = "web-interface.html";
	echo "<script language = 'javascript'type = 'text/javascript'> 
	if (confirm('Are you sure you want to logout?')){
		window.location='$logout';
	}else
		window.location='$cancel';
	</script>";
	exit(); 


?>
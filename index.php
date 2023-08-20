<?php
	/*
	   For someone this index will not work probably
	   because you have walletwise on a subdir and 
	   not in the root folder: /var/www/html (Ex. In /var/www/ or /var/www/something/walletwise)
	   If so, uncomment the script below with yours folder path (http://$domain/yoursubdir/walletwise/web/)
	*/   
    /*
		$domain = $_SERVER['HTTP_HOST'];
		$redirect_url = "http://$domain/yoursubdir/walletwise/web/";
		header("Location: $redirect_url");
		exit();
	*/

	$domain = $_SERVER['HTTP_HOST'];
	$redirect_url = "http://$domain/web/";
	header("Location: $redirect_url");
	exit();
?>

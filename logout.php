<?php
	// This page lets a user logout

	//If no cookie is present, redirect the user:
	if(!isset($_COOKIE['user']))
	{
		header('Location: index.php');
	}
	else //Delete the cookies
	{
		setcookie('user', '', time()-3600, '/', '', 0, 0);
	}

	header('Location: index.php');

?>

<?php 

	session_start();

	if(isset($_POST['submit']))
	{
		session_unset();
		session_destroy();
		header("Location: ../index.php?logout_successful");
	}
	else
		header("Location: ../index.php?access_denied");
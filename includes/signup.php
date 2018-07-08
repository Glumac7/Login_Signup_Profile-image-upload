<?php 
	
	session_start();

	include_once "dbh.inc.php";

	if(isset($_POST['submit']))
	{
		$first = $conn->real_escape_string($_POST['first']);
		$last = $conn->real_escape_string($_POST['last']);
		$pas = $conn->real_escape_string($_POST['pas']);
		$email = $conn->real_escape_string($_POST['email']);

		if(preg_match("/^([a-zA-Z' ]+)$/",$first) || preg_match("/^([a-zA-Z' ]+)$/",$last))
		{
			if(filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$sql = "SELECT * FROM myguests WHERE email='$email';";
				$result = $conn->query($sql);

				if($result->num_rows > 0)
					header("Location: ../index.php?email_exists");

				else
				{
					$pas = password_hash($pas, PASSWORD_DEFAULT);
					$row = $result->fetch_assoc;

					$sql = "INSERT INTO myguests (firstname, lastname, email, pasw) 
					VALUES('$first', '$last', '$email', '$pas');";
					$conn->query($sql);

					$_SESSION['u_id'] = "set";
					$_SESSION['email'] = $_POST['email'];

					header("Location: ../index.php?signup_successful");
				}
			}
			else
				header("Location: ../index.php?invalid_email");
		}
		else
			header("Location: ../index.php?invalid_caracters_in_a_name");

	}
	else
		header("Location: ../index.php?access_denied");
?>
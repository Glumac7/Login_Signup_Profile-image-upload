<?php 

	session_start();
	include_once "dbh.inc.php";

	if(isset($_POST['submit']))
	{
		$email = $conn->real_escape_string($_POST['email']);
		$pas = $conn->real_escape_string($_POST['pas']);

		if(filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$sql = "SELECT * FROM myguests WHERE email='$email';";
			$result = $conn->query($sql);

			$resultCheck = $result->num_rows;

			if($resultCheck > 0)
			{
				$resultGuest = mysqli_fetch_assoc($result);
				if(password_verify($pas, $resultGuest['pasw']))
				{
					$_SESSION['u_id'] = "set";
					$_SESSION['email'] = $_POST['email'];

					$email = $_SESSION['email'];
					$sql = "SELECT id FROM myguests WHERE email='$email';";

					$id = $conn->query($sql);
					$id = mysqli_fetch_assoc($id)['id'];

					$id_user = "../avatar/".$id;

					if(file_exists($id_user.".jpg")){$type = ".jpg";}
					elseif(file_exists($id_user.".jpeg")){$type = ".jpeg";}
					else{$type = ".png";}

					$filenameNew = $id.$type;

					$_SESSION['avatar'] = $filenameNew;

					header("Location: ../index.php?login_successful");
				}
				else
				{
					header("Location: ../index.php?password=false");
				}
			}
			else
				header("Location: ../index.php?email_not_registred");
		}
		else
			header("Location: ../index.php?email_invalid");
	}
	else
		header("Location: ../index.php?access_denied");
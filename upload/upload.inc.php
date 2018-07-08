<?php 

	if(isset($_POST['submit']))
	{
		session_start();
		include_once "../includes/dbh.inc.php";

		$email = $_SESSION['email'];
		$sql = "SELECT id FROM myguests WHERE email='$email';";

		$id_user = $conn->query($sql);
		$id_user = mysqli_fetch_assoc($id_user)['id'];

		$type = explode(".", $_FILES['avatar_img']['name']);
		$destination = "../avatar/".$id_user.".".$type[1];
		$id = "../avatar/".basename($id_user);

		if(file_exists($id.".jpg"))
			unlink($id.".jpg");
		elseif(file_exists($id.".jpeg")) 
			unlink($id.".jpeg");
		else
			unlink($id.".png");
		
		if ($_FILES["avatar_img"]["size"] > 500000) 
		{
			header("Location: ../index.php?image_to_big");
		}

		$filename = $_FILES['avatar_img']['tmp_name'];

		move_uploaded_file($filename, $destination);

		$fileNew = $id_user.".".$type[1];
		$_SESSION['avatar'] = $fileNew;

		header("Location: ../index.php?uploaded_successfuly");
	}
	else
	{header("Location: ../index.php?access_denied");}
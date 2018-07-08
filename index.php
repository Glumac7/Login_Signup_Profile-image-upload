<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>

	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.01">
</head>
<body>
	<div class="main">

		  <div class="form">
		    <?php 
		    	
		    	if(isset($_SESSION['avatar']))
		    	{
		    		?>
		    		<img id="avatar" src="avatar/<?php echo $_SESSION['avatar']; ?>?<?php echo time() ?>">
		    		<?php
		    	}
		    	else
		    	{
		    		echo '<img id="avatar" src="avatar/default.jpg">';
		    	}

		    	if(isset($_SESSION['u_id']))
		    	{
		    		echo '
		    		<form action="upload/upload.inc.php" method="POST" enctype="multipart/form-data">
			    		<input type="file" id="change" name="avatar_img"
	          accept=".jpg, .jpeg, .png" required>
	          			<button style="margin-bottom: 10px;" type="submit" name="submit">
	          				CHANGE
	          			</button>
	          		</form>

		    		<form action="includes/logout.php" method="POST">
						<button type="submit" name="submit">log out</button>
					</form>';	
		    	}
		    	else
		    	{
		    		echo '<form class="register-form" action="includes/signup.php" method="POST">
						    <input name="first" type="text" placeholder="firstname" required/>
						    <input name="last" type="text" placeholder="lastname" required/>
						    <input name="pas" type="password" placeholder="password" required/>
						    <input name="email" type="text" placeholder="e-mail" required/>
						    <button type="submit" name="submit">create</button>
						    <p class="message">Already registered? <a href="#">Sign In</a></p>
						  </form>

						  <form class="login-form" action="includes/login.php" method="POST">
						    <input name="email" type="text" placeholder="e-mail" required/>
						    <input name="pas" type="password" placeholder="password" required/>
						    <button type="submit" name="submit">login</button>
						    <p class="message">Not registered? <a href="#">Create an account</a></p>
						  </form>';
		    	}
		    ?>
		  </div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
		$('.message a').click(function()
		{
		   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</body>
</html>
<?
	ob_start();
	session_start();
	
	require_once 'include/temp_config.php';
	if (isset($_SESSION['user'])!="") 
	{
		header("Location: home.php");
		exit();
	}
	
	$error = false;
	if (isset($_POST['btn-signin'])) 
	{
		$uname = trim($_POST['uname']);
		$uname = strip_tags($email);
		$uname = htmlspecialchars($email);
		$uname = mysqli_real_escape_string($conn1, $_POST['uname']);
			
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		$pass = mysqli_real_escape_string($conn1, $_POST['pass']);
		
		if(empty($uname)) {
			$error = true;
			$unameError = "Venligst indtast dit brugernavn!";
		} 
		
		if(empty($pass)) {
			$error = true;
			$passError = "Venligst indtast dit password!";
		}
		
		if(!$error) {
			$password = md5($pass);
			
			$sql = "SELECT * FROM datamatiker_user WHERE username = '$uname'";
			$res = mysqli_query($conn1, $sql);
			$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
			$count = mysqli_num_rows($res);
			
			if($count == 1 && $row['pword'] == $password) {
				$_SESSION['user'] = $row['id'];
				$_SESSION['name'] = $row['first_name'];
				header("Location: home.php");
				
			} else {
				$errMSG = 
				"
				<li class='alert alert-error'>
					<i class='icon'></i>
					<div class='alert-title'>FEJL</div>
					<div class='alert-message'>Du har indtastet brugernavn eller password forkert, prøv venligst igen!</div>
					<em>Klik for at lukke</em>
				</li>
				";
			}
		}	
	}
?>

<!DOCTYPE html>
<html lang="da-DK">
	<head>
		<meta charset="UTF-8">
		<title>Login | Datamatiker 2016 - 2019</title>
		<meta name="author" content="Patrick Bergmann">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="">
		
		<!-- CSS -->
		<link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/style.css">
	</head>
	<body>
		<div class="bgimg"></div>
		<div class="overlaybg"></div>
		<div class="header_login_title">
			<div>Data<span>matiker</span></div>
			<p>Af: Patrick Bergmann</p>
		</div>
		<div class="login">
			<form action="https://skole.vibedrive.dk/auth.php" method="POST">
				<input type="text" name="uname" id="uname" placeholder="Brugernavn"><br />
				<input type="password" name="pass" id="pass" placeholder="Password"><br />
				<input type="submit" name="btn-signin" value="Log ind">
				<p style="color:white; font-size:20px;">Endnu ikke bruger? Opret dig <a style="color: blue; text-decoration:none; font-size:20px;" href="https://datamatiker.vibedrive.dk/register.php">her</a></p>
			</form>
		</div>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	</body>
</html>

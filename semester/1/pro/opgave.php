<? 
	ob_start();
	session_start();
	require_once '../../../include/config.php'; 
	require_once '../../../include/temp_config.php';
	
	if(!isset($_SESSION['user'])) 
	{
		header("Location: ../../../auth.php");
		exit();
	}
	
	$sql = "SELECT * FROM datamatiker_user WHERE id =".$_SESSION['user'];
	$res = mysqli_query($conn1, $sql);
	$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
	
	if(isset($_GET['u'])) 
	{
		$codeId = mysqli_real_escape_string($conn, $_GET['u']);
		if(ctype_alnum($codeId)) 
		{
			$sql = "SELECT * FROM opgave WHERE topic='$codeId'";
			$check = mysqli_query($conn, $sql);
			if (mysqli_num_rows($check)) {
				$get = mysqli_fetch_array($check);
				$id = $get['id'];
				$title = $get['title'];
				$description = $get['description'];
				$semester = $get['semester'];
				$class = $get['class'];
				$topic = $get['topic'];
				$code = $get['code'];
				$upload = $get['upload'];
			}
			else 
			{
				$errorMSG = "<div class='error-container'>
			<h3>Der er endnu ikke uploadet en opgave til dette sæt!</h3>
		</div>";
			}
		}
	}
?>

<!DOCTYPE HTML>
<html lang="da-DK">
	<head>
		<meta charset="UTF-8">
		<title><? echo "Emnenavn"; ?> | Datamatiker 2016 - 2019</title>
		<meta name="author" content="Patrick Bergmann">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="">
		
		<!-- CSS -->
		<link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/style.css"> 
		<link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/code.css">
		
		<!-- PLUGIN -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body>
		<? include '../../../include/header.inc.php'; ?>
		
		<div class="bgimg"></div>
		<div class="overlaybg"></div>
		
		<?php
		
		$dbSql = "SELECT * FROM opgave ORDER BY id ASC";  
	    $getDb = mysqli_query($conn, $dbSql) or die (mysqli_error());
		while ($row = mysqli_fetch_assoc($getDb)) {
			$id = $row['id'];
			$titel = $row['title'];
			$opgavebeskrivelse = $row['description'];
			$topic = $row['topic'];
			$kode = $row['code'];
			$uploadaf = $row['upload'];
			
			if ($topic == $codeId) {
				echo 
				"
				<div class='panel panel-info'>
					<div class=''panel-heading'>
						<h3 class='panel-title'>$titel</h3>
						<p>$opgavebeskrivelse</p>
					</div>
					<div class='panel-body' id='content'>
						<pre>
							<code>
								$kode
							</code>
						</pre>
					</div>
				</div>
				"; 
			}			
		} ?>

		<? include '../../../include/footer.inc.php'; ?>
	</body>
</html>
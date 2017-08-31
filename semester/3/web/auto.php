<? include_once '../../../include/config.php'; ?>

<!DOCTYPE HTML>
<html lang="da-DK">
	<head>
		<meta charset="UTF-8">
		<title>Auto Firma opgave | Datamatiker 2016 - 2019</title>
		<meta name="author" content="Patrick Bergmann">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="">
		
		<!-- CSS -->
		<link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/style.css">
        <link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/general.css">
		
		<!-- PLUGIN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body>
		<? include '../../../include/header.inc.php'; ?>
		
		<div class="bgimg"></div>
		<div class="overlaybg"></div>
		
		<div class="project_container">
			<div class="projects">
				<? 
					// CONNECTION
					$autoSql = "SELECT * FROM autofirma";
					$getSites = mysqli_query($conn, $autoSql) or die (mysqli_error());
					while ($row = mysqli_fetch_assoc($getSites)) 
					{
						$id = $row['id'];
						$name = $row['name'];
						$link = $row['link'];
						$picture = $row['picture'];
						echo "
						<div class='project_v2'>
				      		<div class='picture lifted'>
				        		<img class='overlay' src='https://skole.vibedrive.dk/assets/images/Autofirma/$picture' width='500' height='260'>
				      		</div>
				      		<div class='project_details'>
				        		<div class='project_header'>
				          			<h2 class='header_title'>$name   <small>$link</small></h2>
				            		<a href='$link' target='_blank'><button class='btn icon-btn'><i class='fa fa-chevron-right'></i></button></a>
				        		</div>
				      		</div>
				    	</div>
						";	
					}
				?>
				
				
		    	
		    	
		    	
		    	
		    	
		    	<? ?>
		    	
		  	</div>
		</div>

		<? include '../../../include/footer.inc.php'; ?>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</body>
</html>
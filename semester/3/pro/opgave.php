<?php	
	include '../../../include/config.php';

ob_start();
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: ../../../auth.php");
    exit();
}

$sql = "SELECT * FROM user WHERE id =".$_SESSION['user'];
$res = mysqli_query($conn, $sql);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);


if(isset($_GET['u']))
	{
		$opgave = mysqli_real_escape_string($conn, $_GET['u']);
		if(ctype_alnum($opgave)) 
		{
			$sql_string = "SELECT * FROM opgave WHERE id='$opgave'";
			$check = mysqli_query($conn, $sql_string);
			if(mysqli_num_rows($check)) {
				$get = mysqli_fetch_array($check);
				$id = $get['id'];
				$title = $get['title'];
				$description = $get['description'];
				$code = $get['code'];
				$upload = $get['upload'];
				$uploaddate = $get['uploaddate'];
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
		<title><? echo $title; ?> | Datamatiker 2016 - 2019</title>
		<meta name="author" content="Patrick Bergmann">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="">
		
		<!-- CSS -->
		<link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/style.css">
        <link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/responsive.css">
		<link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/general.css">

		<style>
			.gallery-container h1 {
			    text-align: center;
			    margin-top: 70px;
			    font-family: 'Droid Sans', sans-serif;
			    font-weight: bold;
			    color: #58595a;
			}
			
			.gallery-container p.page-description {
			    text-align: center;
			    margin: 30px auto;
			    font-size: 18px;
			    color: #85878c;
			}
			
			.tz-gallery {
			    padding: 40px;
			}
			
			.tz-gallery .thumbnail {
			    padding: 0;
			    margin-bottom: 30px;
			    background-color: #fff;
			    border-radius: 4px;
			    border: none;
			    transition: 0.15s ease-in-out;
			    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
			}
			
			.tz-gallery .thumbnail:hover {
			    transform: translateY(-10px) scale(1.02);
			}
			
			.tz-gallery .lightbox img {
			    border-radius: 4px 4px 0 0;
			}
			
			.tz-gallery .caption{
			    padding: 26px 30px;
			    text-align: center;
			}
			
			.tz-gallery .caption h3 {
			    font-size: 14px;
			    font-weight: bold;
			    margin-top: 0;
			}
			
			.tz-gallery .caption p {
			    font-size: 12px;
			    color: #7b7d7d;
			    margin: 0;
			}
			
			.baguetteBox-button {
			    background-color: transparent !important;
			}
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- PLUGIN -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
	<body>
        <? include '../../../include/header.inc.php'; ?>

		<div class="bgimg"></div>
		<div class="overlaybg"></div>
		
		<div class="container">
            <h1 class="my-4">Opgavesæt 1
	            <small><? echo $title;  ?></small>
            </h1>
	        <div class="row">
	            <div class="col-md-8">
	                <pre class="brush: csharp">
<? echo $code;  ?>
	                </pre>
	            </div>
	            <div class="col-md-4">
	                <h3 class="my-3">Projekt Beskrivelse</h3>
	                <p><? echo $description; ?></p>
	                <h3 class="my-3">Projekt Detajler</h3>
                    <ul style="list-style:none;">
                        <li><p><i class="fa fa-calendar"></i> &nbsp;&nbsp;&nbsp;<? echo $uploaddate; ?></p></li>
                        <li><p><i class="fa fa-tags"></i> &nbsp;&nbsp;&nbsp;<?php echo "Tag 1, Tag 2, Tag 3"; ?></p></li>
                        <li><p><i class="fa fa-user"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo $upload; ?></p></li>
                        <li><p><i class="fa fa-globe"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo "https://skole.vibedrive.dk/home"; ?></p></li>

                    </ul>
	            </div>
	        </div>
        </div>
    	<div class="container ">
		    <h3 class="my-4">Relateret projekter</h3>
		    <div class="tz-gallery">
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="../images/park.jpg">
		                        <img src="http://placehold.it/500x300" alt="Park">
		                    </a>
		                    <div class="caption">
		                        <h3 class="my-4">Opgave 2</h3>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="../images/bridge.jpg">
		                        <img src="http://placehold.it/500x300" alt="Bridge">
		                    </a>
		                    <div class="caption">
		                        <h3 class="my-4">Opgave 3</h3>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="../images/tunnel.jpg">
		                        <img src="http://placehold.it/500x300" alt="Tunnel">
		                    </a>
		                    <div class="caption">
		                        <h3 class="my-4">Opgavesæt 2 | Opgave 1</h3>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<? include '../../../include/footer.inc.php'; ?>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	</body>
</html>
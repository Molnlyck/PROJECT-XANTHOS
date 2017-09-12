<? 
	include_once 'include/config.php';

    ob_start();
    session_start();

    if(!isset($_SESSION['user'])) {
        header("Location: auth.php");
        exit();
    }

    $sql = "SELECT * FROM user WHERE id =".$_SESSION['user'];
    $res = mysqli_query($conn, $sql);
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="da-DK">
	<head>
		<meta charset="UTF-8">
		<title>Datamatiker 2016 - 2019 | Alle opgaver fra fagene</title>
		<meta name="author" content="Patrick Bergmann">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  
		
		<!-- CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/style.css">
		<link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/general.css">
        <link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/responsive.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- JS -->
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<!-- FAVICON -->
		<link rel="shortcut icon" href="http://datamatiker.vibedrive.dk/assets/img/favicon.ico">
	</head>
	<body>
		<?php include 'include/header.inc.php'; ?>
		
		<section id="intro" class="parallax-window" data-parallax="scroll" data-image-src="assets/images/bg1.jpg">

		  <div class="intro-content">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-7">
		          <h1>Velkommen til</h1>
		          <h1 class="large-text">VEAD16</h1>
		          <h1>Datamatiker EAL</h1>
		        </div> <!-- /.col-md-7 -->
		
		        <div class="col-md-5">
		          <p>Denne side er designet til at dele og få hjælp til skole opgaver.  Du kan både uploade, samt se forslåede løsning på opgaver fra 1. semester til nu.</p>
		          <a href="https://skole.vibedrive.dk/upload" class="btn btn-green lifted"><i class="fa fa-upload"></i> Upload en opgave</a>
		          <a href="https://eal.webuntis.dk/WebUntis/#Timetable?type=1&formatId=2&id=1107" target="_blank" class="btn btn-green lifted"><i class="fa fa-calendar"></i> Se skema</a>
		        </div> <!-- /.col-md-5 -->
		      </div> <!-- /.row -->
		    </div> <!-- /.container -->
		  </div> <!-- /.intro-content -->
		</section> <!-- /#intro -->
		
		<div class="bgimg"></div>
		<div class="overlaybg"></div>

		<?php include 'include/footer.inc.php'; ?>

        <!-- PLUGINS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>

        <!-- CUSTOM JS -->
        <script type="text/javascript" src="assets/js/notify/bootstrap-notify.min.js"></script>
        <script type="text/javascript" src="assets/js/notify.js"></script>
	</body>
</html>
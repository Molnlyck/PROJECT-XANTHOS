<?php
	include 'config.php';
	
	// UPLOAD£
	if(isset($_POST['upload'])) {
		$title = trim($_POST['title']);
		$title = strip_tags($title);
		$title = htmlspecialchars($title);
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		
		$desc = trim($_POST['desc']);
		$desc = strip_tags($desc);
		$desc = htmlspecialchars($desc);
		$desc = mysqli_real_escape_string($conn, $_POST['desc']);
		
		$code = trim($_POST['code']);
		$code = strip_tags($code);
		$code = htmlspecialchars($code);
		$code = mysqli_real_escape_string($conn, $_POST['code']);
		
		$topic = $_POST['topic'];
		
		if(empty($title)) {
			$error = true;
			$fnameError = "Venligst indtast dit navn";
		} else if (strlen($title) < 2) {
			$error = true;
			$fnameError = "Navn skal være større end 2";
		} 
		
		if(empty($desc)) {
			$error = true;
			$lnameError = "Venligst indtast dit efternavn";
		} else if (strlen($desc) < 4) {
			$error = true;
			$lnameError = "Efternavn skal være større end 4";
		} 
				
		if(empty($code)) {
			$error = true;
			$passError = "Venligst indtast en kode!";
		} else if (strlen($code) < 1) {
			$error = true;
			$passError = "Koden skal indeholde mindst 6 tegn!";
		} 
		
		if(!$error) {
			$query = "INSERT INTO opgave(title,description,semester,class,topic,code) VALUES('$title','$desc','1','programmering','$topic','$code')";
			$res = mysqli_query($conn, $query);
			
			if ($res) {
				$errTyp = "SÅDAN";
				$errMSG = "Uploadet! Du kan nu uploade en mere!";
				
			} else {
				$errTyp = "DANGER!";
				$errMSG = "Noget gik galt, prøv igen senere!";
			}
		} else {
			
			echo $fnameError;
			echo $lnameError;
			echo $passError;
		}
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Upload kode!</title>
		
	</head>
	<body>
		<form action="upload.php" method="POST">
			<label for="title">Titel</label>
			<input type="text" name="title" id="title" placeholder="Titel" /><br />
			<label for="desc">Beskrivelse</label>
			<input type="text" name="desc" id="desc" placeholder="Beskrivelse" /><br />
			<label for="class">Fag</label>
			<select name="class" id="class">
				<option value="programmering">Programmering</option>
				<option value="systemudvikling">Systemudvikling</option>
				<option value="database">Database</option>
				<option value="webudvikling">Webudvikling</option>
			</select>
			<label for="topic">Emne</label>
			<input type="text" name="topic" id="topic" placeholder="1">
			<label for="code">Kode</label>
			<textarea name="code" rows="10" cols="80"></textarea>
			<input type="submit" name="upload" value="Upload!">
		</form>
	</body>
</html>
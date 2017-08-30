<?

	$sql = "SELECT * FROM topic WHERE semester='1' AND class='programmering'";
	$getSqlData = mysqli_query($conn,$sql) or die (mysqli_error());
	while ($row = mysqli_fetch_assoc($getSqlData)) {
		$id = $row['topic_id'];
		$topic = $row['topic'];
		$class = $row['class'];
		
		
		echo "<ol class='topic'>
				<h3>$topic | $id</h3>
				";
				
	}
	
	
?>
<?	
$topic = "SELECT * FROM topic WHERE semester='3' AND class='programmering'";
$getTopics = mysqli_query($conn, $topic);
while($row = mysqli_fetch_assoc($getTopics)) {
	$topic_name = $row['topic_name'];
	$topic_id = $row['topic_id'];
	
	echo "<ol class='topic'><h3>$topic_name</h3><hr>";
	$opgave = "SELECT * FROM opgave";
	$getTitles = mysqli_query($conn, $opgave);
	while ($get = mysqli_fetch_assoc($getTitles)) {
		$opgave_topic_id = $get['topic'];
		$opgave_title = $get['title'];
		$opgave_id = $get['id'];
		
		if ($opgave_topic_id == $topic_id) {
			echo "<li><a href='https://skole.vibedrive.dk/semester/3/pro/opgave.php?u=$opgave_id'>$opgave_title</a></li>";
		}
	
	}
	echo "</ol>";
		
}
?>
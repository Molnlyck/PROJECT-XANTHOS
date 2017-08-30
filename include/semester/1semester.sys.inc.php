<?	
$topic = "SELECT * FROM topic WHERE semester='1' AND class='systemudvikling'";
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
			echo "<li><a href='https://skole.vibedrive.dk/semester/1/sys/opgave.php?u=$opgave_id'>$opgave_title</a></li>";
		}
	
	}
	echo "</ol>";
		
}
?>
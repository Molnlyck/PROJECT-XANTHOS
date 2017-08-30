<?
	$default = "SELECT * FROM $table";
	$navigation_query = "SELECT * FROM opgave INNER JOIN topic WHERE opgave.topic = topic.topic_id ORDER BY topic.topic_name ASC";
	$topic = "SELECT * FROM topic WHERE semester='1' AND class='programmering'";
	$opgave = "SELECT * FROM opgave";
	


?>
<?
	define('DB_HOST', '');
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	$conn->set_charset('utf8');
?>

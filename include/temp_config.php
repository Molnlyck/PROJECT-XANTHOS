<?php
define('DB_HOST', 'mysql30.unoeuro.com');
define('DB_NAME', 'vibedrive_dk_db');
define('DB_USER', 'vibedrive_dk');
define('DB_PASSWORD', 'Bergmann123456');

$temp_conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$temp_conn->set_charset('utf8');
?>
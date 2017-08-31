<?php
$sql = "select * from topic where class='programmering'";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($res)) {
    $topic_id = $row['topic_id'];
    $topic_name = $row['topic_name'];
    $options = $options."<option value='$topic_id'>$topic_name</option>";
}

?>


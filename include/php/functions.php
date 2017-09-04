<?php
function CheckIfUserIsLoggedIn()
{
    if(!isset($_SESSION['user'])) {
        header("Location: auth.php");
        exit();
    }
}
function GetLoggedInUsersDetails()
{
    $sql = "SELECT * FROM user WHERE id =".$_SESSION['user'];
    $res = mysqli_query($conn, $sql);
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
}

?>
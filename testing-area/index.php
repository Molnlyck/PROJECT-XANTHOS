<?

include '../include/config.php';

ob_start();
session_start();

include '../include/php/functions.php';

$inputTitle = $_SESSION['TitleUpload'];
$opgaveDesc = $_SESSION['DescUpload'];

if(isset($_POST['btn_upload'])) {
    $title = $_SESSION['TitleUpload'];
    $desc = $_SESSION['DescUpload'];
    $class = $_SESSION['FagUpload'];
    $semester = $_SESSION['SemesterUpload'];
    $emne = $_POST['emne'];
    $code = trim($_POST['code']);
    $code = strip_tags($code);
    $code = htmlspecialchars($code);
    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $upload = $_SESSION['name'];
    $uploaddate = date("Y-m-d");

    if(empty($title)) {
        $error = true;
        $titleError = "Venligst indtast en titel!";
    } else if (strlen($title) < 10) {
        $error = true;
        $titleError = "Titlen skal være mindst 10 bogstaver/tal lang!";
    }

    if(empty($desc)) {
        $error = true;
        $descError = "Venligst fortæl hvad opgaven går ud på!";
    }

    if (empty($class)) {
        $error = true;
        $classError = "Venligst vælg et fag!";
    }

    if (empty($semester)) {
        $error = true;
        $semesterError = "Venligst vælg et semester!";
    }

    if (empty($emne)) {
        $error = true;
        $emneError = "Venligst vælg et emne!";
    }

    if (empty($code)) {
        $error = true;
        $codeError = "Tror du virkelig at du er smart? Det er en side til deling af opgaver!";
    } else if (strlen($code) < 20) {
        $error = true;
        $codeError = "Ingen opgaver er så små!";
    }

    if(!$error) {
        $query = "INSERT INTO opgave VALUES('','$title','$desc',$semester,'$class',$emne,'$code','$upload','$uploaddate')";
        $res = mysqli_query($conn, $query);

        if($res) {
            $success = "Uploadet!";
            $_SESSION['SemesterUpload'] = "";
            $_SESSION['FagUpload'] = "";
            $_SESSION['TitleUpload'] = "";
            $_SESSION['DescUpload'] = "";
        }
    } else {
        echo $titleError;
        echo $descError;
        echo $semesterError;
        echo $classError;
        echo $emneError;
        echo $codeError;
    }
}
$options = "";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Upload en opgave | Datamatiker 2016 - 2019</title>
    <meta name="author" content="Patrick Bergmann">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/style.css">
    <link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/general.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="http://datamatiker.vibedrive.dk/assets/img/favicon.ico">
</head>
<body>
<?php include '../include/header.inc.php'; ?>

<div class="container">
    <div class="awesome-bg">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" target="noRefresh">
            <div class="form-group ">
                <label for="inputTitle">Opgave titel</label>
                <input type="text" class="form-control" id="inputTitle" name="inputTitle" aria-describedby="titleHelp" placeholder="Opgave titel" value="<?php echo $inputTitle; ?>">
                <small id="titleHelp" class="form-text text-muted">Opgavens titel, som skrevet i det udleveret opgavesæt</small>
            </div>
            <div class="form-group">
                <label for="opgavedesc">Beskrivelse</label>
                <textarea class="form-control" id="opgavedesc" name="opgavedesc" rows="3"><?php echo $opgaveDesc; ?></textarea>
            </div>
            <div class="form-group">

                    <label for="semester">Vælg semester</label>
                    <select class="form-control" name="semester" id="semester" onchange="this.form.submit()">
                        <option>Vælg semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                <?php
                if ($_SESSION['SemesterUpload'] == '') {
                        $_SESSION['SemesterUpload'] = $_POST['semester'];
                        $_SESSION['TitleUpload'] = $_POST['inputTitle'];
                        $_SESSION['DescUpload'] = $_POST['opgavedesc'];
                } else {

                }
                ?>
            </div>
            <div class="form-group">

                    <label for="fag">Vælg fag</label>
                    <select class="form-control" name="fag" id="fag" onchange="this.form.submit()">
                        <option>Vælg fag</option>
                        <?php

                        $SemesterChoosen = $_SESSION['SemesterUpload'];
                        if($SemesterChoosen == 1) {
                            $sql = "SELECT * FROM fag WHERE semester='$SemesterChoosen'";
                            $res = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($res)) {
                                $FagHentet = $row['fag'];
                                echo "<option value='$FagHentet'>$FagHentet</option>";
                            }
                        } else if ($SemesterChoosen == 2) {
                            $sql = "SELECT * FROM fag WHERE semester='$SemesterChoosen'";
                            $res = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($res)) {
                                $FagHentet = $row['fag'];
                                echo "<option value='$FagHentet'>$FagHentet</option>";
                            }
                        } else if ($SemesterChoosen == 3) {
                            $sql = "SELECT * FROM fag WHERE semester='$SemesterChoosen'";
                            $res = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($res)) {
                                $FagHentet = $row['fag'];
                                echo "<option value='$FagHentet'>$FagHentet</option>";
                            }
                        }
                        ?>
                    </select>



            </div>
            <div class="form-group">
                <label for="emne">Emne</label>
                <select class="form-control" name="emne" id="emne">
                    <option>Valg emne</option>
                    <?php
                    $_SESSION['FagUpload'] = $_POST['fag'];

                    if ($FagHentet == 'programmering') {
                        $sql = "SELECT * FROM topic WHERE semester='$SemesterChoosen' AND class='$FagHentet'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)) {
                            $topic_id = $row['topic_id'];
                            $topic_name = $row['topic_name'];
                            echo "<option value='$topic_id'>$topic_name</option>";
                        }
                    } else if ($FagHentet == 'systemudvikling') {
                        $sql = "SELECT * FROM topic WHERE semester='$SemesterChoosen' AND class='$FagHentet'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)) {
                            $topic_id = $row['topic_id'];
                            $topic_name = $row['topic_name'];
                            echo "<option value='$topic_id'>$topic_name</option>";
                        }
                    } else if ($FagHentet == 'database') {
                        $sql = "SELECT * FROM topic WHERE semester='$SemesterChoosen' AND class='$FagHentet'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)) {
                            $topic_id = $row['topic_id'];
                            $topic_name = $row['topic_name'];
                            echo "<option value='$topic_id'>$topic_name</option>";
                        }
                    } else if ($FagHentet == 'virksomhed') {
                        $sql = "SELECT * FROM topic WHERE semester='$SemesterChoosen' AND class='$FagHentet'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)) {
                            $topic_id = $row['topic_id'];
                            $topic_name = $row['topic_name'];
                            echo "<option value='$topic_id'>$topic_name</option>";
                        }
                    } else if ($FagHentet == 'webudvikling') {
                        $sql = "SELECT * FROM topic WHERE semester='$SemesterChoosen' AND class='$FagHentet'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)) {
                            $topic_id = $row['topic_id'];
                            $topic_name = $row['topic_name'];
                            echo "<option value='$topic_id'>$topic_name</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="code">Source code</label>
                <textarea class="form-control" id="code" name="code" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-black" name="btn_upload">Upload</button><button type="submit" class="btn btn-black" name="btn_slet">Slet indtastede oplysninger</button>
            <?php
            if ($_POST['btn_slet'])
            {
                $_SESSION['SemesterUpload'] = "";
                $_SESSION['FagUpload'] = "";
                $_SESSION['TitleUpload'] = "";
                $_SESSION['DescUpload'] = "";
            }
            ?>
        </form>
    </div>
</div>


<div class="bgimg"></div>
<div class="overlaybg"></div>

<?php include '../include/footer.inc.php'; ?>

<iframe name="notRefresh" style="display:none;"></iframe>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
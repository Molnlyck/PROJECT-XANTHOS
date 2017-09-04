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
    <script type="text/javascript">
        function getFag() {
            d = document.getElementById("fag").value;
            alert(d);
        }
    </script>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="http://datamatiker.vibedrive.dk/assets/img/favicon.ico">
</head>
<body>
<?php include 'include/header.inc.php'; ?>

<div class="container">
    <div class="awesome-bg">
        <form method="post" action="https://skole.vibedrive.dk/upload">
            <div class="form-group ">
                <label for="inputTitle">Opgave titel</label>
                <input type="text" class="form-control" id="inputTitle" name="inputTitle" aria-describedby="titleHelp" placeholder="Opgave titel">
                <small id="titleHelp" class="form-text text-muted">Opgavens titel, som skrevet i det udleveret opgavesæt</small>
            </div>
            <div class="form-group">
                <label for="opgavedesc">Beskrivelse</label>
                <textarea class="form-control" id="opgavedesc" name="opgavedesc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="semester">Vælg semester</label>
                <select class="form-control" name="semester" id="semester" onchange="getSemester(this)">
                    <option>Vælg semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="form-group" style="display:none;">
                <label for="fag">Vælg fag</label>
                <select class="form-control" name="fag" id="fag">
                    <option>Vælg fag</option>
                    <option value="programmering">Programmering</option>
                    <option value="systemudvikling">Systemudvikling</option>
                    <option value="virksomhed">Virksomhed</option>
                    <option value="database">Database</option>
                    <option value="webudvikling">Webudvikling</option>
                </select>
            </div>

            <div class="form-group" style="display:none;">
                <label for="emne">Emne</label>
                <select class="form-control" name="emne" id="emne">
                    <option>Valg emne</option>
                    <?php

                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="code">Source code</label>
                <textarea class="form-control" id="code" name="code" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-black" name="btn_upload">Upload</button>
        </form>
    </div>
</div>


<div class="bgimg"></div>
<div class="overlaybg"></div>

<?php include 'include/footer.inc.php'; ?>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
<?
include_once 'include/config.php';
?>
<?
// GET DATA ON USERS AND PROJECTS

$users = array();
$projects = array();

$sql_users = "select * from user";
$res_users = mysqli_query($conn,$sql_users);
while ($row = mysqli_fetch_array($res_users, MYSQLI_BOTH)) {
    $users[] = $row;
}
$sql_projects = "select * from opgave";
$res_projects = mysqli_query($conn, $sql_projects);
while ($row = mysqli_fetch_array($res_projects, MYSQLI_BOTH)) {
    $projects[] = $row;
}

?>
<!DOCTYPE html>
<html lang="da-DK">

<head>
    <meta charset="UTF-8">
    <title>Datamatiker 2016 - 2019 | Alle opgaver fra fagene</title>
    <meta name="author" content="Patrick Bergmann">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/dokumentation.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/style.css">
    <link rel="stylesheet" href="https://skole.vibedrive.dk/assets/css/general.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="http://datamatiker.vibedrive.dk/assets/img/favicon.ico">s

</head>

<body>

<?php include 'include/header.inc.php'; ?>

<!-- Page Content -->
<div class="container">

    <!-- Introduction Row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header my-4">Om Os
                <small>Hyggeligt at du ville kigge forbi!</small>
            </h1>
            <p style="color:#999">Begge projekt medlemmer går på Erhvervsakademiet Lillebælt, beliggende i Vejle.
                <br>
                Websiden er et side projekt lavet for både at udbygge personlige egenskaber, samt et sted hvor brugere kan dele deres løste opgaver, eller finde svar på uløste.</p>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-4 col-sm-6 g-mb-30">
            <i class="fa fa-graduation-cap g-font-size-35 g-mb-25"></i>
            <div class="js-counter g-font-size-35">3</div>
            <h4 class="text-uppercase g-font-size-11 g-font-weight-600 g-mb-25">Semestre</h4>

        </div>

        <div class="col-lg-4 col-sm-6 g-mb-30">
            <i class="fa fa-file-code-o g-font-size-35 g-mb-25"></i>
            <div class="js-counter g-font-size-35" data-reduce-thousands-to="k"><? echo count($projects); ?></div>
            <h4 class="text-uppercase g-font-size-11 g-font-weight-600 g-mb-25">Projekter</h4>

        </div>

        <div class="col-lg-4 col-sm-6 g-mb-30">
            <i class="fa fa-user-o g-font-size-35 g-mb-25"></i>
            <div class="js-counter g-font-size-35"><? echo count($users); ?></div>
            <h4 class="text-uppercase g-font-size-11 g-font-weight-600 g-mb-25">Studerende</h4>

        </div>
    </div>

    <!-- Team Members Row -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header my-4">Vores udviklere <small><a href="bagom">Læs mere om siden her</a></small></h2>
        </div>


        <!-- Patrick -->
        <div class="col-lg-6 col-sm-3 text-center">
            <img class="img-fluid img-thumbnail img-circle img-responsive img-center" src="https://cdn.discordapp.com/attachments/350686737007116299/352526002255298570/migpaamc.jpg" alt="">
            <h3 class="my-5">Patrick Bergmann
                <small class="my-small">Officel team abe</small>
            </h3>
            <div class="social">
                <div class="container-fluid text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item social-facebook"><a href="https://www.facebook.com/MolnlyckCoding/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item social-twitter"><a href="https://twitter.com/MolnlyckCoding"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item social-github"><a href="https://github.com/Molnlyck"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <p class="my-p">Patrick er awesome!</p>
        </div>

        <!-- Vilster -->
        <div class="col-lg-6 col-sm-3 text-center">
            <img class="img-fluid img-thumbnail img-circle img-responsive img-center" src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/12278730_10153247624051381_4583848965544923573_n.jpg?oh=6a2487f5c1e6fc97f4e67323eb0a102d&oe=5A1BC914" alt="">
            <h3 class="my-5">Nicklas Vilster
                <small class="my-small">Duden der holder styr på team aben</small>
            </h3>
            <div class="social">
                <div class="container-fluid text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item social-linkedin"><a href="https://www.linkedin.com/in/nicklas-vilster-388704a4/"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item social-twitter"><a href="https://twitter.com/Chr0lic"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item social-github"><a href="https://github.com/Chrolic"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
            <p class="my-p">Nicklas er awesome!</p>
        </div>
    </div>
    <!-- END TEAM ROW -->

</div>


<div class="bgimg"></div>
<div class="overlaybg"></div>


<?php include 'include/footer.inc.php'; ?>
<script  src="https://skole.vibedrive.dk/assets/js/components/hs.counter.js"></script>
<script >
    $(document).on('ready', function () {
        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');
    });
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>



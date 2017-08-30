<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Datamatiker Vejle <small style="font-size:10px; margin-left:10px;">Project by: Nicklas Vilster & Patrick Bergmann</small></a>
        </div>
        <form class="navbar-form navbar-right">
	        <div class="input-group">
	            <input type="text" class="form-control" placeholder="Søg efter opgave...">
	            <div class="input-group-btn"><button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button></div>
	        </div>
	    </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="https://skole.vibedrive.dk/home" >Hjem</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">1. Semester <span class="caret"></span></a>
                <ul class="dropdown-menu multi-level">
                    <li class="dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-code"></i> Programmering</a>
                        <ul class="dropdown-menu dropdown-menu-thirdlevel">
                            <? include 'semester/1semester.pro.inc.php'; ?>
                        </ul>
                    </li>
                    <li class=""><a href="#"><i class="fa fa-line-chart"></i> Systemudvikling </a></li>
                    <li><a href="#"><i class="fa fa-building-o"></i> Virksomhed    </a></li>
                    <li><a href="#"><i class="fa fa-database"></i> Database</a></li>
                </ul>
            </li>
            <li><a href="#" >2. Semester</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >3. Semester <span class="caret"></span></a>
      	        <ul class="dropdown-menu multi-level">
      		        <li class="dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-code"></i> Programmering</a>
      			        <ul class="dropdown-menu dropdown-menu-thirdlevel">
      				        <? include 'semester/3semester.pro.inc.php'; ?>
      			        </ul>
      		        </li>
      		        <li class="dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-line-chart"></i> Systemudvikling</a>
      			        <ul class="dropdown-menu dropdown-menu-thirdlevel">
      				        <? include 'semester/3semester.sys.inc.php'; ?>
                        </ul>
      		        </li>
      		        <li class="dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-html5"></i> Webudvikling</a>
      			        <ul class="dropdown-menu dropdown-menu-thirdlevel">
      				        <? include 'semester/3semester.web.inc.php'; ?>
      				        <ol class="topic">
      					        <h3>Auto Centrum</h3>
      					        <hr>
      					        <li><a href="https://skole.vibedrive.dk/semester/3/web/auto.php">Autofirma</a></li>
                            </ol>
                        </ul>
      		        </li>
      	        </ul>
            </li>
            <li><a href="https://skole.vibedrive.dk/dokumentation">Om udviklerne</a></li>
            <li><a href="https://skole.vibedrive.dk/logout?logout">Log ud</a></li>
        </ul>
    </div>
</nav>
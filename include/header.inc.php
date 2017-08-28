<header class="header">
			<div class="container">
		    	<div class="header-bar">
		      		<div class="headline-left">
		        		<div class="logo">  
		          			<p><a href="#">Datamatiker 2016 - 2019 | <small>Et projekt af: Patrick Bergmann</small></a></p>
		      			</div>
		      		<div class="headline-right">
		        		<nav>
		          			<ul>
		            			<li><a href="https://skole.vibedrive.dk/home.php">Hjem</a></li>
		            			<li class="has-child"><a href="#">1. Semester</a>
		            				<div class="dropdown-content">
		            					<div class="column">
		            						<h2 class="title">Programmering</h2>
		            						<? 
		            							$sql = "SELECT * FROM topic WHERE class='programmering' AND semester='1'";
												$getItems = mysqli_query($conn, $sql) or die (mysqli_error());
												while($row = mysqli_fetch_assoc($getItems)) 
												{
													$id = $row['topic_id'];													
													$topic = $row['topic'];
													$link = $row['link'];
													
													echo "<a href='$link?u=$id'>$topic</a>";	
												}
		            						?>
		            					</div>
		            					<div class="column">
		            						<h2 class="title">Systemudvikling</h2>
		            						<a href="#">Test</a>
		            					</div>
		            					<div class="column">
		            						<h2 class="title">Virksomhed</h2>
		            						<a href="#">Test</a>
		            					</div>
		            				</div>
		            			</li>
		            			<li class="has-child"><a href="#">2. Semester</a>
		            				<div class="dropdown-content">
		            					<div class="column">
		            						<h2 class="title">Programmering</h2>
		            						<a href="#">Test</a>
		            					</div>
		            					<div class="column">
		            						<h2 class="title">Systemudvikling</h2>
		            						<a href="#">Test</a>
		            					</div>
		            					<div class="column">
		            						<h2 class="title">Virksomhed</h2>
		            						<a href="#">Test</a>
		            					</div>
		            				</div>
		            			</li>
		            			<li class="has-child"><a href="#">3. Semester</a>
		            				<div class="dropdown-content">
		            					<div class="column">
		            						<h2 class="title">Programmering</h2>
		            						<? 
		            							$sql = "SELECT * FROM topic WHERE class='programmering' AND semester='3'";
												$getItems = mysqli_query($conn, $sql) or die (mysqli_error());
												while($row = mysqli_fetch_assoc($getItems)) 
												{
													$topic = $row['topic'];
													$link = $row['link'];
													
													echo "<a href='$link'>$topic</a>";	
												}
		            						?>
		            					</div>
		            					<div class="column">
		            						<h2 class="title">Systemudvikling</h2>
		            						<a href="#">Emne 2</a>
		            					</div>
		            					<div class="column">
		            						<h2 class="title">Webapplikationer</h2>
		            						<? 
		            							$sql = "SELECT * FROM topic WHERE class='webudvikling' AND semester='3'";
												$getItems = mysqli_query($conn, $sql) or die (mysqli_error());
												while($row = mysqli_fetch_assoc($getItems)) 
												{
													$topic = $row['topic'];
													$link = $row['link'];
													
													echo "<a href='$link'>$topic</a>";	
												}
		            						?>
		            					</div>
		            				</div>
		            			</li>
		            			<li><a href="http://datamatiker.vibedrive.dk/semester/4/" class="not-active">4. Semester</a></li>
		            			<li><a href="http://datamatiker.vibedrive.dk/semester/5/" class="not-active">5. Semester</a></li>
		            			<li><a href="https://skole.vibedrive.dk/dokumentation.php" class="not-active">Dokumentation</a></li>
		            			<li><a href="https://skole.vibedrive.dk/upload.php" class="not-active">Upload</a></li>
		            			<li><a href="http://skole.vibedrive.dk/logout.php?logout">Log ud</a></li>
		          			</ul>
		        		</nav>
		      		</div>
		    	</div>
		  	</div>
		</header>
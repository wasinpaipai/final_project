<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>map</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php" style="padding-left: 2%;">BOOT LOCK</a>
        <!-- <h5>BOOT LOCK</h5> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 62%;">
          <!-- <ul class="nav justify-content-end"> -->
          <ul class="navbar-nav justify-content-end">
              <a class="nav-link" href="home.php">Home</a>
              <a class="nav-link" href="map.php">Map</a>
              <a class="nav-link" href="profile.php">Profile</a>
              <a class="nav-link" href="../logout.php">Logout</a>
          </ul>
        </div>
      </nav><br><br>
			<?php 	$stn = ['station1','station2','station3'];
				?>
      <div class="text-center">
        <h2>MAP</h2><br>
        <form method="POST">
					<select name='station' class="ui compact selection dropdown">
					 	<?php
					 	for ($i=0;$i<sizeof($stn);$i++) {?>
						 		<option value="<?=$stn[$i]?>"><?=$stn[$i]?></option>
						<?php
					 	}

					 	?>
				 	</select>
					<input class="ui inverted btn btn-warning" type="submit" name="submit" value="Search">
        </form>
     </div>
      <div class="container">
        <br>
        <div class="row">
          <div class="col">

          </div>
          <div class="col-7">
            <?php
							if(isset($_POST['station'])){
								$station = $_POST['station'];
								if($station == 'station1'){
									echo '<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1fkJrP5ZruUN97eLp8Z6D_i0TkZMR3hDD" width="100%" height="200%"></iframe>';
								}elseif ($station == 'station2') {
									echo '<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1-JLNu_SRjCHC2BIkaISNRdxjHEAVkz8P" width="100%" height="200%"></iframe>';
								}elseif ($station == 'station3') {
									echo '<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ESettYNiHMxJxxg3DBdZ8KQXrctTtn2q" width="100%" height="200%"></iframe>';
								}
							}
						?>
          </div>
          <div class="col">

          </div>
        </div>
      </div><br><br><br><br><br><br><br>


    <footer class="page-footer font-small blue">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> Pattita A. & Wasin K.</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
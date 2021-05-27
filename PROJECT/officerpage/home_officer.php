<?php session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome home</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home_officer.php" style="padding-left: 2%;">BOOT LOCK</a>
        <!-- <h5>BOOT LOCK</h5> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 62%;">
          <!-- <ul class="nav justify-content-end"> -->
          <ul class="navbar-nav justify-content-end">
              <a class="nav-link" href="home_officer.php">Home</a>
              <a class="nav-link" href="map.php">Map</a>
              <a class="nav-link" href="profile.php">Profile</a>
              <a class="nav-link" href="../logout.php">Logout</a>
          </ul>
        </div>
      </nav>
  <br><br><br>
  <div class="container">
    <br>
    <div class="row">
        <div class="col">

        </div>
        <div>
          <div class="mb-3">
            <div class="row no-gutters">
              <div class="col-md-5">
                <center><img src="img/policeman.png" alt="policeman" height="300px" width="300px"></center>
              </div>
              <div class="col-md-7">
                <center><div class="card-body">
                  <div class="cont">
                      <div class="login" >
                              <div class="content">
                                  <h2>QR code for unlock locker</h2>
                                  <br>
                                  <p>
                                  <?php
                      //set it to writable location, a place for temp generated PNG files
                      $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

                      //html PNG location prefix
                      $PNG_WEB_DIR = 'temp/';

                      include "qrlib.php";

                      //ofcourse we need rights to create temp dir
                      if (!file_exists($PNG_TEMP_DIR))
                          mkdir($PNG_TEMP_DIR);


                      $filename = $PNG_TEMP_DIR.'test.png';

                      //processing form input
                      //remember to sanitize user input in real-life solution !!!
                      $errorCorrectionLevel = 'L';
                      if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
                          $errorCorrectionLevel = $_REQUEST['level'];

                      $matrixPointSize = 7;
                      if (isset($_REQUEST['size']))
                          $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


                      QRcode::png($_SESSION['police_qr'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);

                      echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';

                          ?>
                </p>
                              </div>
                      </div>
                  </div>
                </div></center>
              </div>
            </div>
          </div>
        </div>
        <div class="col">

        </div>
      </div>
    </div>
    <br><br><br><br><br>
    <div class="container">
      <br>
      <div class="row">
          <div class="col">

          </div>
          <div class="col-7">
            <div class="mb-3">
              <div class="row no-gutters">
                <div class="col-md-5">
                  <center><img src="img/lock.png" alt="lock" height="200px" width="200px"></center>
                </div>
                <div class="col-md-7">
                  <center><div class="card-body">
                    <div class="cont">
                        <div class="login" >
                                <div class="content">
                                    <h2>BOOT</h2>
                                    <br>
                                    <img src="img/lock.png" alt="unlock" height="8%" width="8%">
                                    <button class="btn btn-success rounded-pill" onclick="window.location.href = 'QRscan.php';">Lock Boot</button>
                                </div>
                        </div>
                    </div>
                  </div></center>
                </div>
              </div>
            </div>
          </div>
          <div class="col">

          </div>
        </div>
      </div>
      <br><br><br><br><br>
        <center style="background-color: gray;"><h2>Feature</h2><br>
        <div class="container">
          <div class="row">
            <div class="col">
              <img src="img/map.png" alt="map" height="30px" width="30px">
              <p>MAP</p>
                <div class="col">
                  <img src="img/lock.png" alt="lock" height="30px" width="30px">
                  <p>LOCK</p>
                </div>
            </div>
            <div class="col">
              <img src="img/policeman.png" alt="policeman " height="30px" width="30px">
              <p>PROFILE</p>
            </div>
            <div class="col">
              <img src="img/unlock.png" alt="unlock" height="30px" width="30px">
              <p>UNLOCK</p>
            </div>
          </div>
        </div>
        </center>
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
<?php 
}else{
      @header("Location:../index.php");
    }
?>
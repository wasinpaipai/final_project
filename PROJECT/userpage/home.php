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
                <center><img src="img/human.png" alt="human" height="100%" width="90%"></center>
              </div>
              <div class="col-md-7">
                <center><div class="card-body">
                  <div class="cont">
                      <div class="login" >
                              <div class="content">
                                  <h2>STATUS</h2>
                                  <br>
                                  <button class="btn btn-success rounded-pill">GOOD</button>
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
                  <center><img src="img/lock.png" alt="lock" height="70%" width="80%"></center>
                </div>
                <div class="col-md-7">
                  <center><div class="card-body">
                    <div class="cont">
                        <div class="login" >
                                <div class="content">
                                    <h2>BOOT</h2>
                                    <br>
                                    <p>locked by police if you have problem please<br> contact by phone</p>
                                    <br>
                                    <img src="img/unlock.png" alt="unlock" height="8%" width="8%">
                                    <button class="btn btn-success rounded-pill" onclick="window.location.href = 'QRscan.php';">Unlock Boot</button>
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
              <img src="img/map.png" alt="map" height="50%" width="20%">
              <p>MAP</p>
            </div>
            <div class="col">
              <img src="img/human.png" alt="human" height="50%" width="20%">
              <p>PROFILE</p>
            </div>
            <div class="col">
              <img src="img/unlock.png" alt="unlock" height="50%" width="20%">
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
   <?php }else{
      @header("Location:../index.php");
    }
?>
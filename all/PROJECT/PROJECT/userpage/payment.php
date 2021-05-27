<!DOCTYPE html>
<html>
<?php
      session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {


require "vendor/autoload.php";
$code = $_POST['txtData'];
$_SESSION['code'] = $code;
?>
<head>
    <meta charset="utf-8" />
    <title>payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

</head>
<body>
  <?php
                        function conn(){
                        $conn = new mysqli("localhost", "root","", "smartlock");
                        return $conn;
                    }
                        $conn = conn();
                        $sql = 'SELECT * FROM `status`
                        WHERE `lock_qr` = "'.$code.'"';
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        if(!$row){
                              echo "<script language='javascript'> alert('QR Code is Incorrect!');window.location='QRscan.php';</script>";
                          }else{?>
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
  <br><br>
  <div class="text-center">
    <h2>PAYMENT</h2>
  </div>
<form method="POST" action="showQR.php">
<div class="container">
<br>
<div class="row">
  <div class="col">
  </div>
  <div class="col-7 card">
    <div class="card-body">
      <h5 class="card-header">Payment Details &nbsp;&nbsp;&nbsp;<img src="img/visa.png" alt="visa" height="44.8px" width="44.8px">
        <img src="img/jcb.png" alt="jcb" height="44.8px" width="44.8px">
        <img src="img/american-express.png" alt="american-express" height="44.8px" width="44.8px">
        <img src="img/citi.png" alt="citi" height="44.8px" width="44.8px">
      </h5>
      <p class="card-text">
          <form role="form">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="form-group">
                          <label>CARD NUMBER</label>
                          <div class="input-group">
                              <input type="tel" class="form-control" placeholder="Valid Card Number" />
                              <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12">
                      <div class="form-group">
                          <label>EXPIRATION DATE</label>
                          <input type="tel" class="form-control" placeholder="MM / YY" />
                      </div>
                  </div>
                  <div class="col-xs-5 col-md-5 pull-right">
                      <div class="form-group">
                          <label>CV CODE</label>
                          <input type="tel" class="form-control" placeholder="CVC" />
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12">
                      <div class="form-group">
                          <label>CARD OWNER</label>
                          <input type="text" class="form-control" placeholder="Card Owner Names" />
                      </div>
                  </div>
              </div>
              <br>
              <button class="btn btn-success btn-lg btn-block">Start Subscription</button>
                <input type="hidden" name="data" value="<?php echo $code; ?>">
          </form>
          </p>
          
    </div>
  </div>
  <div class="col">
  </div>
</div>
</div>
</form>
<!-- Credit Card Payment Form - END -->

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
             <?php  
                          }
                ?>
</body>
</html>
   <?php 
}else{
      @header("Location:../index.php");
}
?>
<?php session_start();


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    if (!empty($_POST['txtData']) && empty($code)) {
      $code = $_POST['txtData'];
      $_SESSION['code'] = $code;
    }else if (empty($_POST['txtData']) && empty($_SESSION['code'])){
      echo "<script language='javascript'> alert('กรุณนาแสกน QR code');window.location='QRscan.php';</script>";
    }
    else if(empty($_POST['car_no'])){
      echo "<script language='javascript'> alert('กรุณากรอกหมายเลขทะเบียนรถ');</script>";
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BOOT LOCK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
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
    <form method="POST">
      <div class="card" style="border: solid;">
        <center><h2>Lock Boot</h2></center>

        <div class="card-body">
          Boot Code :
          <input type="text" name="code" value="<?php echo $_SESSION['code'];?>"><br>
          Car number :
          <input type="text" name="car_no" ><br>
          Time :
          <?php
                date_default_timezone_set("Asia/Bangkok");?>
          <input type="text" name="dt" value="<?php echo date("Y-m-d h:i:s");
        ?>"><br>
        </div>
        <div class="card-body text-muted">
          <center><button type="submit" class="btn btn-success rounded-pill" data-toggle="modal" data-target="#exampleModal"> Lock Boot </button></center>
        </div>
      </div>
    </div>
  </form>
  <?php
        function conn(){
                $conn = new mysqli("localhost", "root","", "smartlock");
                    return $conn;
                }
                if(!empty($_POST['car_no'])){
                  $lock_qr = $_POST['code'];
                  $car_number = $_POST['car_no'];
                  $conn = conn();
                  $sql = "INSERT INTO `status`(`lock_qr`,`car_number`, `time_lock`) VALUES ('$lock_qr','$car_number',(CURRENT_TIMESTAMP))";
                  $conn->query($sql);
                  @header("Location:locksuccess.php");
                }
?>
    <div class="col">
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
    </script>
</body>

</html>
<?php
}else{
     @header("Location:../index.php");
}
?>
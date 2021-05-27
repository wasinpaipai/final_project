<?php session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
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
  <br><br>
      <div class="text-center">
        <h2>PAYMENT</h2><br>
        <h2>"SUCCESS"</h2>
      </div>
      <div class="container">
          <br>
          <div class="row">
            <div class="col">
            </div>
            <div class="col-8 card text-center text-white bg-warning">
              <div class="card-body">
                <p class="card-text">
                  <h1>ชำระเงินสำเร็จ</h1><br>
                  <h2>กรุณนานำตัวล็อคกลับไปคือที่สถาน๊เก็บตามป้ายระบุ</h2>
                </p>
                          <button type="button" class="btn btn-success" onclick="location.href='home.php'">SUCCESS</button>
              </div>
            </div>
            <div class="col">
            </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
   <?php
    function conn(){
                $conn = new mysqli("localhost", "root","", "smartlock");
                    return $conn;
                }
                $conn = conn();
                $id = $_SESSION['id'];
                $code = $_SESSION['code'];
                // date_default_timezone_set("Asia/Bangkok");
                // $pay_time = date("Y-m-d H:i:s");
                            $sql_1 = "INSERT INTO payment(
                                time_payment,acct_id
                                )
                                VALUES (
                                (CURRENT_TIMESTAMP),
                                '$id'
                                )";
                            
                            $sql_2 = "UPDATE `status` 
                            SET check_payment = true, payment_id = (SELECT payment_id FROM `payment` where time_payment= (CURRENT_TIMESTAMP)), acct_id = $id
                            WHERE lock_qr = $code and check_payment = false";
                            $conn->query($sql_1);
                            $conn->query($sql_2);
 }else{
      @header("Location:../index.php");
  }
?>
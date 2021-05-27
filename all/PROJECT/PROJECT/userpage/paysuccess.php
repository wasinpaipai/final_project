<?php session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    function conn(){
                $conn = new mysqli("localhost", "root","", "smartlock");
                    return $conn;
                }
                $conn = conn();
                $id = $_SESSION['id'];
                $sql_0 = 'SELECT * FROM `status` right join `account` on  payment.acct_id = account.acct_id';
                        $result = $conn->query($sql_0);
                        $row = $result->fetch_assoc();
                        if ($row['lock_qr'] == $_POST['code']){
                            $sql_1 = "INSERT INTO payment(
                                time_payment,acct_id
                                )
                                VALUES (
                                (CURRENT_TIMESTAMP),
                                '$id'
                                )";
                            $sql_2 = "INSERT INTO `status`(`car_number`, `time_getback`) VALUES ('$car_number',(CURRENT_TIMESTAMP))";
                            $conn->query($sql_1);
                            $conn->query($sql_2);
                            }else{
                            echo "error";
                            }

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
                                              <?php
                                                  echo "<h1>QR Code</h1><hr/>";

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


                                                  if (isset($_REQUEST['data'])) {

                                                      //it's very important!
                                                      if (trim($_REQUEST['data']) == '')
                                                          die('data cannot be empty! <a href="?">back</a>');

                                                      // user data
                                                      $filename = $PNG_TEMP_DIR.'test'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
                                                      QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);

                                                  } else {

                                                      //default data
                                                      echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';
                                                      QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);

                                                  }

                                                  //display generated file
                                                  echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';

                                                  //config form
                                                  echo 'Your code:&nbsp;<input type="text" name="data" readonly value="'.(isset($_REQUEST['data'])?htmlspecialchars($_REQUEST['data']):"Empty").'" />';
                                                      ?>
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
}else{
    @header("Location:../index.php");
}
?>
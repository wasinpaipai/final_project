<?php
	function conn(){
                $conn = new mysqli("localhost", "root","", "smartlock");
                    return $conn;
                }
                if(isset($_POST['car_no'])){
                  $car_number = $_POST['car_no'];
                  $time_lock = date("Y-m-d h:i:s");
                  $conn = conn();
                  $sql = "INSERT INTO `car`(`car_number`, `time_lock`) VALUES ($car_number,(CURRENT_TIMESTAMP))";
                  $conn->query($sql);
                }
             
  $hostName="localhost";
  $user="root";
  $pass="";
  $dbName="smartlock";
  $connect=mysqli_connect($hostName, $user, $pass, $dbName) or die("Not connect");
  echo "Connect";
 ?>

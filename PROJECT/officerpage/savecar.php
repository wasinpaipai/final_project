<?php
        function conn(){
                $conn = new mysqli("localhost", "root","", "smartlock");
                    return $conn;
                }
                $car_number = '1234';
                $time_lock = date("Y-m-d h:i:s");
                $conn = conn();
                $sql = "INSERT INTO `car`(`car_number`, `time_lock`) VALUES ($car_number,(CURRENT_TIMESTAMP))";
        $conn->query($sql);

?>
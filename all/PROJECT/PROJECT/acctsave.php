<?php
        function conn(){
                $conn = new mysqli("localhost", "root","", "smartlock");
                    return $conn;
                }
                $username = $_POST['username'];
                $password = $_POST['password'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $citizen_id = $_POST['citizen_id'];
                $address = $_POST['add'];
                $conn = conn();
                $sql = "INSERT INTO account(
                    username,
                    password,
                    fname,
                    lname,
                    citizen_id,
                    address
                    )
                    VALUES (
                    '$username',
                    '$password',
                    '$fname',
                    '$lname',
                    '$citizen_id',
                    '$address'
                    )";
        $conn->query($sql);
        header("location:index.php");
?>
<?php
			session_start();
			function conn(){
				$conn = new mysqli("localhost", "root","", "smartlock");
				return $conn;
			}
					if(!isset($_SESSION["loggedin"])){
					    $username = $_POST['username'];
						$password = $_POST['password'];
					}else{
						$username = $_SESSION['username'];
						$password = $_SESSION['password'];
					}
						$conn = conn();
						$sql = 'SELECT * FROM `account` right join `qr` on  account.qr_id = qr.qr_id where `username`="'.$username.'" and `password`="'.$password.'" ';
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
						if(!$row){
						      echo "<script language='javascript'> alert('Username and Password Incorrect!');window.location='login.php';</script>";
						  }else{
						  	if(!isset($_SESSION["loggedin"])){
						  		$_SESSION['id'] = $row['acct_id'];
							  	$_SESSION['username'] = $username;
							  	$_SESSION['password'] = $password;
							  	$_SESSION['fname'] = $row['fname'];
							  	$_SESSION['lname'] = $row['lname'];
							  	$_SESSION['citizen_id'] = $row['citizen_id'];
							  	$_SESSION['address'] = $row['address'];
							  	$_SESSION['police_qr'] = $row['police_qr'];
							  	$_SESSION['loggedin'] = true;
							  }
						  	if ($_SESSION['username'] == "police") {
						  		@header("Location:officerpage/home_officer.php");
						  	}else{
						  		@header("Location:userpage/home.php");
						  	}
						  	exit();
						  }
?>
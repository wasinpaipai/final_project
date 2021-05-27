<?php
	function conn(){
                $conn = new mysqli("localhost", "root","", "smartlock");
                    return $conn;
                }
                $conn = conn();
				$sql1 = 'SELECT * FROM `status`';
										$result1 = $conn->query($sql1);
				$sql2 = 'SELECT * FROM `account`';
										$result2 = $conn->query($sql2);
										while($row1 = $result1->fetch_assoc()){
											if(!$row1){
											      echo "error";
											  }else{
											  	while($row2 = $result2->fetch_assoc()){
													if(!$row2){
													       echo "error";
													  }else{
													  		if($row1['acct_id']==$row2['acct_id']){
														  		echo $row1['time_lock']+""+$row1['acct_id'] ;
														  		echo "<br>";
															  	}
												  }
												}
											  		
											  	}
										  }

							   ?>
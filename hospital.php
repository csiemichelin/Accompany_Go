<?php
    $servername = "localhost";
    $username = "root";
    $password = "fish91501";
    $dbname = "test1";

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("connect fail: " . $conn->connect_error);
    }
    
    $sql = "SELECT name , address , phone FROM hospital ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
     
        while($row = $result->fetch_assoc()) {
           
			$output[] = $row;
        }
		
		
	print((json_encode($output, JSON_UNESCAPED_UNICODE)));
	
		
    }else {
        echo "暫時沒有任務資訊";
    }
	
	
    $conn->close();
?>
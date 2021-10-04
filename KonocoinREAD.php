<?php
	$servername = "fdb22.awardspace.net" ;
	$username = "3499757_dandovueltas";
	$password = "anea5Z4n1^(*-244";
	$dbName = "3499757_dandovueltas";
	
	
	$User = $_POST["User"];
	


	
	//Make Conection
	$conn = new mysqli($servername, $username, $password, $dbName);
	
	//Check connection
	if(!$conn )
	{
		die("Connection Failed.". mysqli_connect_error());
		
	}
	
	$sql = "SELECT `Konocoins` FROM Accounts WHERE Username  = '" . $User . "'" ;
	
	$result = $conn ->query($sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row  = $result->fetch_assoc())
		{
			
                        echo $row["Konocoins"];
			
                        
		}
		
		if($realpassword == true)
		{
		    
		}
		else
		{

                    
		    
		}
	}
	else
	{
		echo "No result: " . $loginUser . " " . $loginPass;
		
	}
	
	


?>
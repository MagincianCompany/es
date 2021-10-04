<?php
	$servername = "fdb22.awardspace.net" ;
	$username = "3499757_dandovueltas";
	$password = "anea5Z4n1^(*-244";
	$dbName = "3499757_dandovueltas";
	
	
	$registerUser = $_POST["registerUser"];
	$registerPass = $_POST["registerPass"];
	$ocupatedname = False;
	//Make Conection
	$conn = new mysqli($servername, $username, $password, $dbName);
	
	//Check connection
	if(!$conn )
	{
		die("Connection Failed.". mysqli_connect_error());
		
	}
	
	$sql = "SELECT Username FROM Accounts" ;
	
	
	$result = $conn ->query($sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row  = $result->fetch_assoc())
		{
			if($row["Username"] == $registerUser)
			{
				
				$ocupatedname = true;
				
			}
			else
			{
				
				
			}
			
		}
		
		if($ocupatedname == false)
		{
			
			//echo "el nombre ". $registerUser. " está disponible"."<br>";
			$sql2 = "INSERT INTO `Accounts`(`Username`, `Password`) VALUES ('". $registerUser ."','".$registerPass ."')";
			
			if ($conn->query($sql2) === TRUE) 
			{
				echo "usuario ". $registerUser ." registrado"; 
			} 
			else 
			{
				echo "Error: " . $sql2 . "<br>" . $conn->error;
			}

			
		}
		else
		{
			
			echo "el nombre ". $registerUser . " ya está en uso"."<br>";
		}
	
	}
	else
	{
		echo "Unknow error";
		
	}
	
	


?>
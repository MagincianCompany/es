<?php
	$servername = "fdb22.awardspace.net" ;
	$username = "3499757_dandovueltas";
	$password = "anea5Z4n1^(*-244";
	$dbName = "3499757_dandovueltas";
	
	
	$loginUser = $_POST["loginUser"];
	$loginPass = $_POST["loginPass"];
	$realpassword = False;

	
	//Make Conection
	$conn = new mysqli($servername, $username, $password, $dbName);
	
	//Check connection
	if(!$conn )
	{
		die("Connection Failed.". mysqli_connect_error());
		
	}
	
	$sql = "SELECT `ID`, `Username`, `Password`,`Konocoins` FROM Accounts WHERE Username  = '" . $loginUser . "'" ;
	
	$result = $conn ->query($sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row  = $result->fetch_assoc())
		{
			if($row['Password'] == $loginPass)
			{
				$realpassword = true;
                                echo $row['ID'] . '&' . $loginUser . '&' . $row['Konocoins'] . '&';
				
			}
			
                        
		}
		
		if($realpassword == true)
		{
		    
		}
		else
		{
		    echo "Contraseña incorrecta ";
                    
		    
		}
	}
	else
	{
		echo "No result: " . $loginUser . " " . $loginPass;
		
	}
	
	


?>
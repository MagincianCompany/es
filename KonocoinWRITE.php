<?php
	$servername = "fdb22.awardspace.net" ;
	$username = "3499757_dandovueltas";
	$password = "anea5Z4n1^(*-244";
	$dbName = "3499757_dandovueltas";
	
	
	$User = $_POST["User"];
	$Konocoins = $_POST["Konocoins"];

	//Make Conection
	$conn = new mysqli($servername, $username, $password, $dbName);
	
	//Check connection
	if(!$conn )
	{
		die("Connection Failed.". mysqli_connect_error());
		
	}
	
	$sql = "SELECT ID FROM Accounts" ;
	
	
	$result = $conn ->query($sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row  = $result->fetch_assoc())
		{
			if($row["ID"] == $User)
			{
				
                                $sql2 = "UPDATE `Accounts` SET `Konocoins`=" . $Konocoins . " WHERE `ID` = '". $User . "'";
			
                                if ($conn->query($sql2) === TRUE) 
                                {
                                        echo "Proceso Realizado"; 
                                } 
                                else 
                                {
                                        echo "Error: " . $sql2 . "<br>" . $conn->error;
                                }
                                        
			}
                        else
                        {
                                echo "User no detected:". $User . "<br>";
                        }
                        
			
		
	
                }
        }
	else
	{
		echo "Unknow error";
		
	}
	
	


?>
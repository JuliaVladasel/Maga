<?php 
session_start();

	include("config.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$Email = $_POST['Email'];
        $Password = $_POST['Password'];

		if(!empty($Email) &&  !empty($Password))
		{

			
			$query = $conn->prepare("INSERT INTO user VALUES (null,'$Email','$Password')");

			
            $query->execute();
            $query->close();

			header("Location:HomeWelcome.php");
			die;
		}else
		{
			echo "Eroare la introducerea datelor";
		}
	}
    else
    {
			echo "Eroare generala";
	}
	?>

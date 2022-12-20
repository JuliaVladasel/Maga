<!DOCTYPE html>
<html>
<body>

<?php
include ("config.php");

$sql = "SELECT * from client WHERE Email='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";
// echo $sql."<br>";

//$sql="SELECT * from clienti WHERE id_client=2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        header("Location:HomeWelcome.php");
        exit();
    
        // echo "ID CLIENT: ".$row["Client_Id"]."<br>";
		// echo "NUME CLIENT:".$row["Last_name"]."<br>";
	    // echo "PRENUME CLIENT:".$row["First_name"]."<br>";
		// echo "Email:".$row["Email"]."<br>";
    }
} else {
    // echo "Nu exista clientul cu aceasta adresa de Email!";
    header("Location:http://localhost/Maga/LogIn-formular.php");
    

    
}

$conn->close();

?>

</body>
</html>
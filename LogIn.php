<!DOCTYPE html>
<html>
<body>

<?php
include ("config.php");

$sql = "SELECT * from user WHERE Email='".$_POST["Email"]."' and Password='".$_POST["Password"]."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        header("Location:HomeWelcome.php");
        exit();
    }
} else {
    header("Location:
    LogIn-formular.php");
    

    
}

$conn->close();

?>

</body>
</html>
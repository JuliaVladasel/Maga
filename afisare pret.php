<?php 
// include database connection 
include "config.php";
$sql = "SELECT Price FROM jewel WHERE jewel_id=1001";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> pret:". $row["Price"] ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
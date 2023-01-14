<?php 
// include database connection 
include "config.php";
$sql = "SELECT Image FROM jewel WHERE jewel_id=1001";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<img src="data:image/png;base64,'.base64_encode($row["Image"]).'"/>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>
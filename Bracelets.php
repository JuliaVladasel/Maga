<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Ju Jewellery</title>
<link rel="icon" type="image/x-icon" href="imagini/JB.ico">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="background-color:white">




<hr width="100%" 
    size="15" 
    align="center"
    color="black"
</hr>

<div class="titlu">Ju Jewellery</div>

<div class="navbar">
    <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="#">Bracelets</a></li>
        <li><a href="#">Necklaces</a></li>
        <li><a href="#">Rings</a></li>
        <li><a href="#">Accesories</a></li>
        <li><a href="About.php">About us</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><button class="btn"><i class="fa fa-cart-arrow-down"></i></button></li>
        <li><a href="LogIn-formular.php"><button class="btn"><i class="	fa fa-user-circle-o"></i></button></a></li>
    </ul>
</div>

<table>
    <tr>
        <td><?php include "config.php";
                $sql = "SELECT Image FROM jewel WHERE jewel_id=1000";
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
            ?></td>
            <td><h1>Tennis Bracelet</h1><br><h1>Price:</h1><?php include "config.php";
                                                $sql = "SELECT Price FROM jewel WHERE jewel_id=1000";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                 // output data of each row
                                                     while($row = $result->fetch_assoc()) {
                                                             echo $row["Price"] ;
                                                      }
                                                } else {
                                                          echo "0 results";
                                                        }

                                                $conn->close();
                ?>
                </td>
                <td><?php include "config.php";
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
            ?></td>
             <td><h1>Tennis Bracelet</h1><br><h1>Price:</h1><?php include "config.php";
                                                $sql = "SELECT Price FROM jewel WHERE jewel_id=1000";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                 // output data of each row
                                                     while($row = $result->fetch_assoc()) {
                                                             echo $row["Price"] ;
                                                      }
                                                } else {
                                                          echo "0 results";
                                                        }

                                                $conn->close();
                ?>
                </td>

</body>
</html>
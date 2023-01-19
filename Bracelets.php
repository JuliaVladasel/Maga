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
        <li><a href="Bracelets.php">Bracelets</a></li>
        <li><a href="Necklace.php">Necklaces</a></li>
        <li><a href="Rings.php">Rings</a></li>
        <li><a href="Accesories.php">Accesories</a></li>
        <li><a href="About.php">About us</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><button class="btn"><i class="fa fa-cart-arrow-down"></i></button></li>
        <li><a href="LogIn-formular.php"><button class="btn"><i class="	fa fa-user-circle-o"></i></button></a></li>
    </ul>
</div>


    
<?php include "config.php";
     $sql = "SELECT Image, Name, Price FROM jewel Where Category_Id=300";
    $result = $conn->query($sql);
    $count=0;
    echo '<table>';   
    echo '<tr>'; 
    while($row = $result->fetch_assoc()) {
                       
        echo '<td><img class="product-image" src="data:image/png;base64,'.base64_encode($row["Image"]).'"/></td>';
        echo '<td class="product-title">'.$row["Name"].'</td>';
        echo '<td class="product-price">'.$row["Price"].'</td>';
         $count++;
        if($count%2==0)
             {
                 echo'</tr>';
                 echo'<tr>';
            }
                       
    }   
echo'</tr>';
echo'</table>';

$conn->close();
?>
    
     
            
          

</body>
</html>
<?php
include "../db_conn.php";
// process.php
if (isset($_POST['cartPrice'])) {
    $cartPrice = $_POST['cartPrice'];
 
    echo "Received from JavaScript: " . $cartPrice;
    $sql="INSERT INTO ordertable (price) VALUES ('$cartPrice')";
    if ($conn->query($sql) === TRUE){
        
        header("location:./ecom.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "No data received from JavaScript.";
}
?>
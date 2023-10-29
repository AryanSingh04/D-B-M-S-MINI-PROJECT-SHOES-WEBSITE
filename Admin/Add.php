<?php
// include "../db_conn.php";

//   $name = $_POST["pname"];
//   $desc = $_POST["pdesc"];
//   echo 
//   $oprice = $_POST["oprice"];
//   $nprice = $_POST["nprice"];
//   $img = $_FILES["imgupload"];
//   if(strpos($img["type"], 'jpeg')){
//     $img["name"] =$name.".jpg";
//   }
//   elseif (strpos($img["type"], 'png')){
//     $img["name"]=$name.".png";
//   }

// $folder = "../products/".$img["name"];
//   move_uploaded_file($img["tmp_name"],$folder);
//   $sql = "INSERT INTO product (pname,pdesc,poprice,pnprice,pimage) VALUES('$name','$desc','$oprice','$nprice','$folder')";
//   $result = mysqli_query($conn,$sql);
   
//     if($result){
//     header("location:./forms.html");
//     }
//     else{
//         echo "no". mysqli_error($conn);
//     }
include "../db_conn.php";

$name = $_POST["pname"];
$desc = $_POST["pdesc"];
$oprice = $_POST["oprice"];
$nprice = $_POST["nprice"];
$img = $_FILES["imgupload"];
if(strpos($img["type"], 'jpeg')){
    $img["name"] = $name . ".jpg";
} elseif (strpos($img["type"], 'png')){
    $img["name"] = $name . ".png";
}
elseif(strpos($img["type"],"webp")){
    $img["name"] = $name . ".webp";
}

$folder = "../products/" . $img["name"];
move_uploaded_file($img["tmp_name"], $folder);

// Use prepared statement to insert data safely into the database
$sql = "INSERT INTO product (pname, pdesc, poprice, pnprice, pimage) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssdss", $name, $desc, $oprice, $nprice, $folder);

if ($stmt->execute()) {
    header("location: ./forms.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

  

?>
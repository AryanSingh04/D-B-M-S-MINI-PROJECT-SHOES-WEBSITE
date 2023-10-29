<?php
include "../db_conn.php";
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $name= test_input($_POST['name']);
  $email =test_input($_POST['email']);
  $password = test_input($_POST['pass']);
  $cnfp=test_input($_POST['cnfp']);
  $role = $_POST['role'];
  if($password===$cnfp){
    $password=md5($password);
           $sql="INSERT INTO user(name,email, password, role) VALUES ('$name','$email', '$password','$role')";
           $result= mysqli_query($conn,$sql);
            echo "<script>alert('User Registered Successfully')</script>";
           header("location:./index.php");
          
  }
  else{
    echo "Passwords do not match!";
  }
?>
<?php
include "../db_conn.php";
session_start();

 if(isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["role"] )){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $email =test_input($_POST['email']);
      $password = test_input($_POST['pass']);
     
      $role = $_POST['role'];
      if(empty($email)){
    
      }
      elseif(empty($password)){

      }
      else{
   //hashing the password
   $password= md5($password);
  
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)=== 1){
            $row= mysqli_fetch_assoc($result);
            $_SESSION["c.name"]= $row["name"];
            $c_name =  $_SESSION["c.name"];
            if($row['role'] === $role && $role ==="User" ){
             
               header("location:../User/ecom.php");
            }
            else if($row['role'] === $role && $role==="Admin"){
                header("location:../Admin/index.php");
            }
           else{
            echo "wrong role";
            header("location:../Login/index.php");
           }
        }
        else{
            echo "failed to log in";
            header("location:../Login/index.php");
        }
    }else{
        echo "query error";
    }
   
      }
    
 } 
?>
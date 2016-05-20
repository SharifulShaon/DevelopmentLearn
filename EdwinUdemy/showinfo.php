<?php 
include "dbconnection.php";


if(isset($_POST['submit'])){
    
    $username = $_POST['name'];
    $userpassword = $_POST['password'];
    
    
    $query = "INSERT into users(Name,Password)";
    $query .="VALUES('$username','$userpassword')";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die ("Failed");
    }
    
    
    
    
}


?>










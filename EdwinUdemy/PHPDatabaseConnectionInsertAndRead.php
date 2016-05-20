<?php

if(isset($_POST['submit'])){
    
    $username=$_POST['name'];
    $userpass=$_POST['password'];
    
  
    
    $connection = mysqli_connect('localhost','root','','loginapp');
    
    $query="INSERT INTO users(Name,Password)";
    $query.="VALUES ('$username','$userpass')";
 
   $result= mysqli_query($connection,$query);
    
    if(!$result){
        die("Failed");
    }
    else{
        echo "success";
    }
    
    
}
    





?> 
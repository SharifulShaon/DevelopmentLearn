<?php


include "dbconnect.php";


if(isset($_POST['submit'])){
    
    $titile =$_POST['titile'];
    $content = $_POST['content'];
 
    if($titile && $content){
        
        $query="INSERT INTO posts(Title,Content)";
        $query.="VALUES ('$titile','$content')";
        
        $result =mysqli_query($connection,$query);
        
    }
    
    if(!$result){
        die("Failed");
    }
    
          
    
}












?>
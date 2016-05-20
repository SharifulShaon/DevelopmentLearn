<?php


include "dbconnect.php";


$query='SELECT * FROM posts';

$result = mysqli_query($connection,$query);
if(!$result){
    die ('Could not read data');
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    <title>Submit form</title>
</head>
<body>
    
    <div class="container">
     
                
                
                <div class="row">
  <div class="thumbnail col-md-6">
   
   <?php
      
      while($row=mysqli_fetch_array($result)){
          echo $row['Title'];
           echo $row['Content'];
     
}
      
      
      ?>
    
  </div>
  ...
</div>
                
                
                
            </div>
        
            
    
    
    
</body>
</html>
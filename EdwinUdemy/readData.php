<?php

include "dbconnection.php";

$query="SELECT * FROM users";
 $result = mysqli_query($connection,$query);
    
    if(!$result){
        die ("Failed");
    }





?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <title>Hm</title>
</head>
<body>
    
    <div class="container">
            <div class="col-sm-6">
                
              <?php
      /*          
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Name"]. "<br>";
    }
}
               
*/
                while($row = mysqli_fetch_assoc($result))
                {
                    
                
                    print_r($row);
                   
                }
                
            ?>
               
                
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem deleniti deserunt fugit, beatae? Natus saepe excepturi nihil et iusto blanditiis. Voluptates quos quod, veniam sapiente illum voluptatibus autem ea commodi?
                

        </div>
        
        
    </div>
    
    
    
    
</body>
</html>
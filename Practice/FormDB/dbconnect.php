<?php

$dbhost = "localhost";
$dbusername="root";
$dbpassword="";
$dbname="practice";


$connection=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
 //$connection = mysqli_connect('localhost','root','','practice');

if($connection){
    echo "Database Connected";
}









?>
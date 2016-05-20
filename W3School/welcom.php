<?php


if(isset($_POST['submit'])){
    
    
    $uname=array('Shaon','Bappy','Anik');
    
    $username=$_POST['name'];
    $userpass=$_POST['pass'];
    
    
 if(in_array($username,$uname)){
     echo "Sorry user name already Exist <br>";
 }
    
}

 








?> 
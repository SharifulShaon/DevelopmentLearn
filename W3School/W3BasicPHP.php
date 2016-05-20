<?php 
for ($i=0; $i < 10; $i++) { 

	echo "the Number is : $i <br>" ;
	# code...
}


$color = array('red','green','blue');

foreach ($color as $col) {
	# code...
	echo $col;
	echo "<br>";
}



// function 




function hellofunc($fname){

	echo "hello bro <br>";

	echo "MY name is : $fname <br>";
}




hellofunc("Shaon");
hellofunc("Bappy");
hellofunc("Anik");
hellofunc("Faysal");
hellofunc("Arif");




function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);






$cars = array("Shariful Islam","Shaiful Hossain","kalmalasj asd");

echo "i Like " . $cars[0]. "," . $cars[1];


$x = 75;
$y = 25; 

function addition() {
   // $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}

addition();
echo $z;


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];







// Form Submiting


if () {
	# code...
}





 ?>


 <form method="post">
 	
 	name : <input type="text" name="fname"/>
 	<input type="submit">

 </form>
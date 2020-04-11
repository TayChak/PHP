<!DOCTYPE html>
<html>

<head>
	<title> PHP Syntax </title>
<head>

<body>

	<?php
	echo "Hello World!<hr />";

	// Comment

	# Comment

	/*
	Multi-line Comment Block
	*/

	// Comments contained inside code
	$x = 10 /* + 5 */ + 20; 
	echo $x;         // output 30
	echo "<hr />";

	ECHO "Text Sample 1<hr />";
	echo "Text Sample 2<hr />";
	ECho "Text Sample 3<hr />";

	$car = "volvo";
	echo "My car is a " . $car . "<br>";
	echo "My car is a " . $CAR . "<br>"; // output an error $CAR not defined 
	echo "My car is a " . $cAR . "<br>"; // output an error $cAR not defined 

	?>

</body>
</html>

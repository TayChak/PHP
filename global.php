<!DOCTYPE html>
<html>
<body>

<?php
$x = 30;
$y = 20;


function test1() {
     global $x, $y;
	 $y = $x + $y;
} 

test1(); // Execute Function
echo $y; // Output Value of Variable y

?>

</body>
</html>

/* It's important to note that php stores all global variables in an array variable called Global's $GLOBALS[] 
an array is a special variable that can store multiple values.*/

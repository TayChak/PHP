<!DOCTYPE html>
<html>
<body>

<?php

//SORT
$names = array("John", "Bob", "Dana", "Sue", "Ted", "Sam", "Xena", "Zara");
rsort($names); // ASSOCIATIVE ARRAY SORT reverse  (Z->A) 
sort($names) // ASSOCIATIVE ARRAY SORT  alphabetic (A->Z)
$nlen = count($names);
for($x = 0; $x <  $nlen; $x++) {
     echo $names[$x];
     echo "<br>";
}

echo "<hr />";

$tscore = array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
krsort($tscore); ///ASSOCIATIVE ARRAY SORT ACCORDING TO Key
arsort($tscore) //ASSOCIATIVE ARRAY SORT ACCORDING TO VALUE
foreach($tscore as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}

?>

</body>
</html>

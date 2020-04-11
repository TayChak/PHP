<!DOCTYPE html>
<html>
<body>

<?php
function test1() {
     static $x = 10; //We want local variables to retain their value so he can be used elsewhere.
     echo $x;
     $x++;
}

test1();
echo "<br>";
test1();
echo "<br>";
test1();
echo "<br>";
test1();
?>  

</body>
</html>

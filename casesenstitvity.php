<!DOCTYPE html>
<html>
<body>

<?php

	// PHP is a case sensitive.
	// it will show an output apart from the case it has been written.
	echo"hello everyone"."<br/>";
	ECHO "HELLO WORLD"."<br/>";
	Echo "Good morning"."<br/>";

	// all variable names are case-sensitive.
	// It will display the value of the $color variable (this is because $color, $COLOR, and $coLOR are treated as three different variables)
	$color= "red";

	echo "the color of my car is" . $color."<br/>";
	echo "the color of my car is" . $Color."<br/>";
	echo "the color of my car is" . $COLOR."<br/>";
?>
</body>
</html>

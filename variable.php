<?php

$text="meena";
$x=6;
$y=12;

/*VARIABLES ARE CASE SENSITIVE IN PHP
$meena and $Meena are two different variables

echo statement is often used to output data to the screen.
and print contains the value of the variable except just showing output

we did not have to tell PHP which data type the variable is
PHP automatically converts the variable to the correct data type, depending on its value. 

*/
echo $text."<br/>";//it will give an output meena
echo "$text"."<br/>";//it will give an output meena
echo $x ."<br/>";//it will give an output 6
echo "$x"."<br/>"; //it will give an output 6
echo '$x'."<br/>";//it will give an output $x

/* php has three different scope:
a) local scope
b) global scope
c) static scope
*/

$z = 20; //global scope

function mytest(){
	echo "the value of the variable z is $z" ."<br/>";
}

mytest();

echo"the value of the variable z outside the function is $z";


// $m = 20; //global scope

function mynew(){
	// local scope
	$m=100;
	echo "the value of the variable m inside the function which is a locla variable for this function is $m" ."<br/>";
}

mynew();

echo"the value of the variable z outside the function is $m"."<br/>";

// USING GLOBAL KEYWORD

$a = 10;
$b = 20;

// PHP also stores all global variables in an array called $GLOBALS[index].
// The index holds the name of the variable.

function self(){
	// global $a,$b;
	// $b = $a+$b;

	$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];

}
self();
echo"$b"."<br/>";


// STATIC KEYWORD

function statictest(){
	static $x=2;
	echo $x;
	$x++;
}

statictest();
echo"<br/>";
statictest();
echo"<br/>";
statictest();
echo"<br/>";
?>

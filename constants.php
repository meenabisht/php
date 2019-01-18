<?php 
/*
DEFINING CONSTANTS

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

To create a constant, use the define() function.

SYNTAX  -     define(name, value, case-insensitive)

NAME- the constant name
value - value hold by the constant
case-insensitive is by default false but can be changes to TRUE
if case-insensitive is true rthan it doesnt affect the text cases whether it is uppercase ,lowercase whatever
but if case-insensitive is false the text case matters.
*/

// Defining constant
define("SITE_URL", "https://www.tutorialrepublic.com/");
 
// Using constant
echo 'Thank you for visiting - ' . SITE_URL;
echo"<br/>";

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo"<br/>";


define("HELLO", "Welcome to W3Schools.com!");

function myTest() {
	// in this only hello case uppercase will work and if it doesnt found that it will output anything apart from it.
    echo hello;
}
 
myTest();
 ?>
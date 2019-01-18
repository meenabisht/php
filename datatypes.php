<?php 
/*PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

*/

//range of the string is 0 - 255
// -128 to 127
$x ="hello world";
$y ="hello meena";

echo $x."<br/>";
echo $y."<br/>";

/*range of an integer
-32768 to +32767
-2,147,483,648 and 2,147,483,647.
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
var_dump() function returns the data type and value:
*/

$x=87654;
$y="meena";
var_dump($x)."<br/>";//int(87654)
// for string data type var_dump outputs the length of the string wih the value.
var_dump($y);//returns. string(5)"meena"
echo"<br/>";
$z=23.788;
var_dump($z);
echo"<br/>";

// A Boolean represents two possible states: TRUE or FALSE.
// EXAMPLE OF array_key_exists

$a=array("Volvo"=>"XC90","BMW"=>"X5");
// if (array_key_exists("Volvo",$a))
if (array_key_exists("honda",$a))
  {
  echo "Key exists!";//if it exists it will return this --- TRUE
  echo"<br/>";
  }
else
  {
  echo "Key does not exist!";//if it exists it will return this --- FALSE
  echo"<br/>";
  }


$show_error = True;
var_dump($show_error);
echo"<br/>";

// var_dump of an array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);//array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
echo"<br/>";

// object datatype

class Car {
  function Car($a) {
    $this->model = $a;
  }
}
// create an object
$herbie = new Car("hello");//hello

// show object properties
echo $herbie->model;
echo"<br/>";


class greeting{  //object(greeting)#2 (1) { ["str"]=> string(12) "Hello World!" } 
  // properties
  public $str = "Hello World!";
    
  // methods
  function show_greeting(){
  return $this->str;
  }
}
 
// Create object from class
$message = new greeting;
var_dump($message);


// NULL DATA TYPE

$x = "meena bisht";
// $x=0;
$x=null;
var_dump($x);
 ?>
<?php 
$a="meena";
print_r(strlen($a));
echo"<br/>";

print_r(strlen("riya"));//counts the length of the string - even a particular character
echo"<br/>";

print_r(str_word_count("hello meena how are you"));//counts the number of words
echo"<br/>";

print_r(strrev("meena bisht"));//reverse the whole string 
echo"<br/>";

print_r(strpos("meena bisht" , "meena"));//output 0
echo"<br/>";

print_r(strpos("meena bisht" , "bisht"));//output 6
echo"<br/>";

print_r(str_replace("meena","riya","hello meena"));
echo"<br/>";
 ?>
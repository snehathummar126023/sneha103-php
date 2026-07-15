<?php
//string functions are Built - in function
// Inverstigatring strings
// Manipulating stings
$str1 = "sneha";
$str2 = "thummar";

echo $str1 . "" .$str2;
echo "<br>";
print($str1 . "" . $str2);

echo "<br>" ;
echo strlen($str1);

echo "<br>" ;
$trimString = trim($str1);

echo "<br>";
echo strlen($trimString);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strtolower($str1);

echo "<br>";
echo strtoupper($str1);

echo "<br>";
echo  strcmp ("hello","Hello");

echo "<br>";
echo  strstr($str1 ,"A");

echo "<br>";
echo  stristr($str1 ,"A");

echo "<br>";
echo  ucfirst("i am student in MU");

echo "<br>";
echo  ucwords("i am student in MU");





?>
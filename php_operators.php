<?php

/*print "Arithmetic Operator Examples\n";
echo "Printing 5 mod 3 \n";
echo (5%3)."\n";


echo "Printing 5 mod -3 \n";
echo (5 % -3)."\n";


echo "Printing 3333333333  mod 3 \n";
echo (3333333333%3)."\n";

echo "Printing 5 divided by -3 \n";
echo (5/-3)."\n";

$a = "10";
$b = "5";
echo "Printing $a divide by $b \n";
echo ($a/$b)."\n";


$a = "10";
$b = "3";
echo "Printing $a divide by $b \n";
echo ($a/$b)."\n";*/

/*
$a = 1;
$b = 2.5;
$c = 0xFF;
print $c."\n";
$d = $b+c;
print $d."\n";
$e = $d * $b;
$f = ($d + $e) % $a;
echo "Printing d ($f + $e)\n";

print "*****************************************************\n";

print "\n Assignment Operators Examples \n";
$a = 4;
$b = &$a;

print "$a\n $b\n";

$a = 5;
print "$a\n $b\n";


print "*****************************************************\n";

print "\n Bitwise Operators \n";

echo "Bitwise AND \n";
echo (3 & 4) . "\n";

echo ("12" ^ "9") ."\n";
*/

print "************************************************************\n";


print "\n Variable behaviour\n";
$unset_obj->foo = 'bar';
var_dump($unset_obj);

print "\n Verfifying that null variables are not set";

$a = null;
var_dump(isset($a));

print "\n Checking for empty test \n";
$a = 0;
var_dump(empty($a));
var_dump(empty($avv));
$b = false;
var_dump(empty($b));

print "\nChecking double dollar\n";
$a = 'this';
$$a = 'then';
var_dump($this);

$_SERVER = 'hey';
var_dump($_SERVER);

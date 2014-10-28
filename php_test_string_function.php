<?php

$str = 'The quick brown fox jumped over the lazy dog';

/*string replace works in both mutable and immutable fashion */
$str_old = $str;
$simple = str_ireplace("the", "black", $str_old);
//var_dump($simple);
$simple = str_replace("the", "black", $str_old);
//var_dump($simple);
//var_dump($str_old);

/* string pad */
$str_old = $str;
//No padding takes place because
//If the value of pad_length is negative, less than, or equal to the length of the input string, no padding takes place.
$simple = str_pad($str_old, 10, ":", STR_PAD_BOTH);
//var_dump($simple);
$simple = str_pad($str_old, 25, ":", STR_PAD_BOTH);
//var_dump($simple);

/* chr */
var_dump(chr(97));

echo "a ","b ","\n";

/*explode*/
$str_old = "a,b,c,d,e,f";
$exp_arr = explode(",", $str_old, -2);
print "Limit = -2\n";
var_dump($exp_arr);
print "Limit = 2\n";
var_dump(explode(",", $str_old, 2));
print "Limit = 0\n";
var_dump(explode(",", $str_old, 0));
print "Delimiter = empty string\n";
var_dump(explode("", $str_old, 2));
print "Delimiter not in string\n";
var_dump(explode(":", $str_old, 2));
print "Delimiter not in string and limit is negative\n";
var_dump(explode(":", $str_old, -2));

/*implode*/
print "Glue is empty string\n";
var_dump(implode("", array()));

/*ltrim*/
$str_old = "Hello World";
var_dump(ltrim($str_old, 'WHdl'));

/*str_replace gotchas*/
print "str_replace gotchas \n";
$search = array('x'=>'A', 'y'=>'B', 'z'=>'C');
$replace = array('a', 'b', 'c');
$str_old = 'A B C D';
var_dump(str_replace($search, $replace, $str_old));

/*strcmp*/
$str1 = 'foo';
var_dump("ord of f is ".ord(NULL));
var_dump(strcmp('bea', 'bear'));
var_dump(strcmp(NULL, 'shweta'));
var_dump(ord('e')."   ".ord('c'));
var_dump(strcmp('abcz', 'abd'));

print "substr function test with -ve lenght\n";
$str = 'abcdefgh';
//Errors out
//var_dump(substr_compare($str, 'cd', 0, -1));
//var_dump(substr_count($str, 'cd', 0 , -1));



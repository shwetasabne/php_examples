<?php

include 'b.php';
$a = 10;
test();
print "Printing value of m outside of test func ".$m." \n";

print "Calling function new test\n";
new_test();
var_dump($obj);

function new_test(){
	global $obj;
	$obj = &new stdclass;
	//var_dump($obj);
}

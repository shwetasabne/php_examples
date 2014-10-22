<?php
$m = 10;

function test(){
	$m = 10;
        global $a;
	print "m is $m\n";
	print "a is $a\n";
	print $m."\n";
	$m += $a;
	$GLOBALS['m'] = $m;
}

<?php

$arr['test'] = 10;
function test_static_no_ref(){
    global $arr;
    static $a;
    echo "Static a is \n";
    var_dump($a);
    if(! isset($a) ){
	$a = $arr;
//	$a = new stdclass;
    }
    $a['test']++;
   // $a->property++;
    return $a;
}



function test_static_ref(){
    global $arr ;
    static $a;
    echo "Static a is \n";
    var_dump($a);
    if(! isset($a) ){
	$a = &$arr;
//	$a = &new stdclass;
    }
    $a['test']++;
    return $a;
}

$obj1 = test_static_ref();
print "Printing arr 1\n";
var_dump($arr);
$still_obj1 = test_static_ref();
echo "\n";
$obj2 = test_static_no_ref();
$still_obj2 = test_static_no_ref();

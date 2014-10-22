<?php


function test_alternative_if_else($a){
    if($a == 3)
        print "$a equals 3\n";
    elseif($a > 10)
        print "$a is greater than 10\n";
}

function test_while_loop($a){
    while($a < 20){
        if($a%2 == 0){
            print "$a is even\n";
        }
        else{
            print "continuing since $a\n";
            continue;
        }
        if($a == 19){
            print "breaking since $a\n";
            break;
        }
        $a++;
    }   
}

function test_while_on_list(){
    $myArr = array('aa', 'bb', 'cc', 'dd');
    while(list($k, $v) = each($myArr)){
        print $k.'=>'.$v."\n";
    }
    print $k.'=>'.$v."\n";
}

function test_do_while($i){
    do{
        if($i < 5){
            print $i."\n";
            break;    
        }
        $i++;
        if ($i > 20){
            print "Printing ".$i."\n";
            break;
        }
        echo "$i is ok\n";
    }while(0);
}

function test_for_loop(){
    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );

    for($i = 0, $size = count($people); $i < $size; ++$i) {
        print $people[$i]['salt']."\n";
    }

}

function test_for_switch(){

    //Output of switch is "string is 2"
    $string = '2string';

    switch($string){
        case 0 : 
            echo "string is 0\n";
            break;
        case 2 :
            echo "string is 2\n";
            break;
        case "2string" :
            echo "string is 2string\n";
            break;
    }

    //Comparing with if 
    if($string == 0)
    {
        echo "string is 0\n";
    }
    if($string == 1){
        echo "string is 1\n";
    }
    if($string == 2){
        echo "string is 2\n";
    }
    if($string == '2string')
    {
        echo "string is 2string\n";
    }
}

test_for_switch();

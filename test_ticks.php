<?php

declare(ticks=3);

function tick_handler(){
    print "Tick handler is called\n";
}

register_tick_function('tick_handler');

print "Statement 1 printed\n";
print "Statement 2 printed\n";
print "Statement 3 printed\n";
print "Statement 4 printed\n";
print "Statement 5 printed\n";
print "Statement 6 printed\n";
print "Statement 7 printed\n";
print "Statement 8 printed\n";
print "Statement 9 printed\n";
if(1 == 0)
{
    print "1 is not equal to 0\n";
    print "doing some assign statement\n";
    $a = 3;
}
else{
    print "1 equal to 0\n";
    print "doing some assign statement\n";
    $a = 3;

}


<?php

// for loop

for($i = 1; $i <= 20;$i++){
    echo $i ."  ";
}


// make a time table using for loop
$number = 5;
for($ttable = 1;$ttable <= 10; $ttable++){
    $result = $number * $ttable;
    echo "<br> $number * $ttable = $result ";
}

//make a factorial using for loop

$num2 = 8;
$facto = 1;
for($fact = $num2; $fact > 1; $fact-- ){
    $facto *= $fact;

}

echo "<br>".$facto;

// 1-4 makes time tables using nasted loop

for($tt = 1; $tt <= 3;$tt ++){
    for($time = 1; $time <= 4;$time ++){
        $r= $tt * $time;
        echo "<br>$tt * $time = $r ";
    }
}

$names=[
    ["belal",23],
    ["belal",23],
    ["belal",23],
];

foreach($names as $name){
    echo "<br>" .$name[0];
}
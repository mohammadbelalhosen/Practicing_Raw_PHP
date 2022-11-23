<?php

// htmlentities
echo "<h2>string Function htmlentities</h2>";

$name = "<h1>belal hosen</h1>";

echo htmlentities($name);
echo "<br>";
echo html_entity_decode("<h3>I love programming</h3>");

//repeat string fuction
echo "<h2>string Function repeat</h2>";

echo "<br>";
$para = "i love my country. ";

echo str_repeat($para,10);

echo "<br>";

//empty string function
echo "<h2>string Function empty</h2>";

$usname = "belal hosen";

if(empty($usname)){
    echo "plz input any alphabate";
}else{
    echo "well done";
}

echo "<br>";

// isset
echo "<h2>string Function isset</h2>";

$fist = "belal";
$second = null;

var_dump(isset($fist));
echo "<br>";
var_dump(isset($second));

// array fuction
//explode

echo "<h2>Array Function</h2>";

echo "<br>";
$parag ="Belal Chittgonng Empac Computer";
print_r(explode(" ",$parag));

echo "<br>";
$file_format = "index.html.php";

$array_file = explode(".",$file_format);

if(end($array_file) == "html" ){
    echo "well";
}else{
    echo "select html extention format";
}

//count

$student = [
    [
   "name" => "Belal",
    "roll" => 124345
    ],
    [
        "name" => "Belal",
         "roll" => 124345
    ],
    [
        "name" => "Belal",
         "roll" => 124345
    ],
    [
        "name" => "Belal",
         "roll" => 124345
         ]

];

echo "<br>";
if(count($student) > 3 ){
    echo "Sorry";
}else{
    echo "wellcome";
}

//push,pop,shift,unshift

echo "<h2>Array fuction push,pop,shift,unshift example</h2>";

$names = [
    "belal",
    "helal",
];
echo "<pre>";
print_r($names);
echo "</pre>";

array_push($names,"rakib","nurnabi");

echo "<pre>";
print_r($names);
echo "</pre>";

array_pop($names);

echo "<pre>";
print_r($names);
echo "</pre>";

array_unshift($names,"nika","kawser");

echo "<pre>";
print_r($names);
echo "</pre>";

array_shift($names);

echo "<pre>";
print_r($names);
echo "</pre>";
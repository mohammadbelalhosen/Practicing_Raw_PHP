<?php

use function PHPSTORM_META\elementType;

function tryR($num1, $num2)
{
    $a = $num1;
    $b  = $num2;
    $result = $a + $b;
    return $result;
    // echo $result;
};
// tryR(34,654);

// echo tryR(34,634);

function callB($try, $num3)
{
    $store = $try;
    $d = $num3;
    $result2 = $try - $num3;
    echo  "1st function total number is $try . call back fuction minus is $result2";
}

callB(tryR(23, 34), 22);

echo "<br>";

//ternery operator
$g = 23;
echo $g % 2 == 0 ? 'even' : 'odd';

//string function

echo "<br>";
$some = "belal";


printf("my name is %s", strtoupper($some));


//trim ()

$trim = "belal hosen";
echo "<br>" . trim($trim, "e/n");
echo "<br>";

//array
$faltu = [
    "belal",
    [
        "belal",
        "belal",
        "belal",
        "belal",
        "belal",
        "belal",
    ],
    [
        "belal",
        "belal",
        "belal",
        "belal",
        "belal",
        "belal",
    ],
    [
        "belal",
        "belal",
        "belal",
        "belal",
        "belal",
        "belal",
    ],
    "belal",
    "belal",
    "belal",
    "belal",
    "belal",
];
var_dump(count($faltu));

echo "<br>";

$fruits = [
    'mango',
    'jam',
    'kathal',
    'lichi',
];

$delete = array_pop($fruits);

print_r($fruits);

echo "i like $delete";

echo "<br>";

$number = 2;
for ($i = 1; $i <= 10; $i++) {
    echo "$number * $i =" . $number * $i . "<br>";
}


echo "<br>";

$mistakes = [];
// array_push($mistakes, ['first'],['belal']);
$mistakes["first"] = "bug";
print_r($mistakes);

echo "belal";

echo "<br>";

$email = "mdbelal@gmail.com";

var_dump(strpos($email, 'com', 12));
echo "<br>";
if (strpos($email, "@gmail.com") > 0) {
    echo "yes have @";
} else {
    echo "dont have @";
}

echo "<br>";
$anyno = 34;
$anyno2 = 35;
if ($anyno < $anyno2) {
    echo "this is right";
} else {
    echo "this is wrong";
}
echo "<br>";
printf(is_numeric($anyno));
echo "<br>";
function Belal($call)
{
    $be = 34;
    $ba = 56;
    $ca = $call;
    $re = $be + $ba + $call;
    return $re;
}


function Belal2($re, $call2)
{
    $res = $re + $call2;
    echo $res;
}

Belal2(Belal(34), 50);

echo "<br>";

echo 20 / 2 == 10 ? "right" : "wrong"; //turnery operatior

echo "<br>";

$birds = ['magpie', 'kingfisher', 'bilay'];
$jekono = [
    'first' => 'belal',
    'second' => 'helal',
    'third' => [
        'forth' => 'nika',
        'fith' => 'rakib',
        'six' => [
            'seven' => 'raihan'
        ]
    ]
];

// print_r($birds[3]);
print_r($jekono['third']['six']['seven']);

$jekono['second'] = "harun";
print_r($jekono['second']);
var_dump($jekono);

echo "<br>";
$sn = "my nem is belal i am a very bad student in my class rom i am very danger for every khata ok ";

print_r(substr($sn, 0, 14) . '....');


$kdf = null;
var_dump(empty($kdf));
var_dump(isset($kdf));

print_r(explode(' ', $sn));
print_r(implode(' ', $birds));
var_dump(in_array('doyel', $birds));

print_r(count($birds));
array_push($birds, 'kaoya');

print_r($birds);


echo "<br>";

for ($i = 1; $i < 5; $i++) {
    echo "<pre>";
    $kk = '*';
    echo str_repeat($kk, $i);
    echo "</pre>";
    // for()
};
echo "<br>";

foreach ($birds as  $bird) {
    echo "<pre>";
    print_r($bird);
    echo "</pre>";
}


echo "<br>";

$ndf = 6;
for ($i = 1; $i <= 10; $i++) {
    $r = $ndf * $i;
    echo "<pre>";
    echo $ndf . "*" . "$i" . "=" . $r;
    echo "</pre>";
}


$hjfd = 21;
if ($hjfd % 2 == 0) {
    echo "even no";
} else {
    echo "odd";
}

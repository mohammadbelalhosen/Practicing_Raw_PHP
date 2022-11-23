<?php
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

var_dump(strpos($email,'com' ,12)) ;
echo "<br>";
if(strpos($email,"@gmail.com") > 0){
echo "yes have @";
}else{
    echo "dont have @";
}
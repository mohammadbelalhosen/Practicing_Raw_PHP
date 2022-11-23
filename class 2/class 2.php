<?php

// -------different ways of output in php : echo, printf(), var_dump() --------//

$name = "Belal Hosen";
$hobby = "Programming & Coading";

echo "My name is $name"; //use echo for showing output 
echo "</br>";
var_dump(" My name is $name"); //use var_dum for showing output
echo "</br>";
printf("My name is %s. My hobby is %s.", strtoupper($name), strtoupper($hobby)); //use printf for showing output and Apply some fuction
echo "</br>";


// --------operators php have many types of oparator such as assignment ,arithmatic , loogical etc----//

$nub1 = 47;
$nub2 = 120;
$add = $nub1 + $nub2;
$minus = $nub2 - $nub1;
$modulas = $nub2 % $nub1;

echo "$add <br>";
echo "$minus <br>";
echo "$modulas <br>";

// try to number increment and decremtnt

$nub1++;
$nub2--;
echo "increment num1 : $nub1 </br>";
echo "decrement num2 : $nub2 </br>";

/* using most important datatype fuction 
make a simple markCalculate and letter point using fuction and if condition  */

// fuction 

echo "<h1>Simple MarkCalculator using Fuction</h1>";
function markCalculate($bangalNo, $mathNo, $englishNO, $islamBookNo, $ictNo, $yourname = "Belal")
{
    $bangal = $bangalNo;
    $math = $mathNo;
    $english = $englishNO;
    $islamBook = $islamBookNo;
    $ict = $ictNo;
    $markname = $yourname;

    $total = $bangal + $math + $english + $islamBook + $ict;

    $avarageNumber = $total / 5;
    echo "Avarage Number is $avarageNumber </br>";

    //apply if else conditon

    if ($avarageNumber >= 80) {
        echo "$markname your Result is Excellent .Your letter Point is A+ .";
    } elseif ($avarageNumber >= 70) {
        echo "$markname your Result is Very Good .Your letter Point is B .";
    } elseif ($avarageNumber >= 60) {
        echo "$markname your Result is Good .Your letter Point is C .";
    } else {
        echo "$markname your Result is Fail .Your letter Point is F .";
    }
}

markCalculate(50, 81, 87, 90, 87,);
echo "</br>";
markCalculate(80, 89, 87, 90, 87, "Nika Sultana");
echo "</br>";
markCalculate(60, 61, 54, 68, 58, "Sakib");
echo "</br>";
markCalculate(12, 45, 12, 25, 45, "Danial");

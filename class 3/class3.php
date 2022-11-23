<?php

//---------find out greater number
echo "<h2>Find Out Greatter Number</h2>";

function getGreaterNo($num1, $num2, $num3, $num4)
{
    $num1 = $num1;
    $num2 = $num2;
    $num3 = $num3;
    $num4 = $num4;
    echo "1st Number: $num1 </br> 2nd Number: $num2 </br> 3rd Number: $num3  </br> 4th Number: $num4 ";
    echo "</br>";
    if ($num1 > $num2 && $num1 > $num3 && $num1 > $num4) {
        echo " 1st Number is Greatter than another Number";
    } elseif ($num2 > $num1 && $num2 > $num3 && $num2 > $num4) {
        echo "2nd Number is Greatter than another Number";
    } elseif ($num3 > $num1 && $num3 > $num2 && $num3 > $num4) {
        echo "3rd Number is Greatter than another Number";
    } else {
        echo "4th Number is Greatter than another Number";
    }
}

getGreaterNo(43, 90, 99, 75);
echo "<br>";
getGreaterNo(99, 90, 54, 75);
echo "<br>";


//-----Authentication system 
echo "<h2>Authentication System</h2>"; 

$username = "belal";
$pass = "belals";

if ($username == "belal") {
    if ($pass == "belal") {
        echo "you are Welcome";
    } else {
        echo "your pass is incorrect";
    }
} else {
    echo "your name is incorrect";
}

echo '<br>';


//---------Find out Even Or Odd Number And Check Positive,negative,nutral Number
echo "<h2>even or odd number </h2>";

function getEvenOrOdd($number)
{
    $number = $number;
    if ($number > 0) {
        echo "This Number is Positive";
        if ($number % 2 == 0) {

            echo " and this is even Number";
        } else {
            echo " and this is odd Number";
        }
    } elseif ($number < 0) {
        echo "This number is negative";
    } else {
        echo "This is Nutral Number";
    }
}

getEvenOrOdd(23);
echo '<br>';
getEvenOrOdd(-34);
echo '<br>';
getEvenOrOdd(0);
echo '<br>';
getEvenOrOdd(22);
echo '<br>';


//---------Check name or age 

echo "<h2>Check alphabet or numaric</h2>";

$name = "belal";
if (ctype_alpha($name) == 1) {
    echo "Welcome";
} else {
    echo "invalid name";
}

echo '<br>';

$age = "belal";
if (is_numeric($age) == 1) {
    echo "Welcome";
} else {
    echo "invalid age";
}

echo '<br>';




//making loan system using nasted if and fuction

echo "<h2>Making Loan System</h2>";


function getLoanMoney($ammount, $interest, $year = 1)
{
    $ammount = $ammount;
    $interest = $interest;
    $year = $year;

    $totalInterest = ($interest / 100) * $year;
    $totalInMOney = $totalInterest * $ammount;
    $totalAmmount = $ammount + $totalInMOney;
    $perMonth = $totalAmmount / 12;
    echo "Payable Per Month Money is $perMonth.";
    return $perMonth;
}


//------use Call back fuction

function eligableforloan($tomalEarn, $totalCost, $perMonth)
{

    $totalEarn = $tomalEarn;
    $totalCost = $totalCost;
    $saving = $totalEarn - $totalCost;

    if ($saving > $perMonth) {
        echo " You Are Eligable For Loan";
    } else {
        echo " You Are not Eligable For Loan";
    }
}

eligableforloan(12000, 10000, getLoanMoney(5000, 10));
echo "<br>";
eligableforloan(10500, 10000, getLoanMoney(6000, 10));

$g = 23;
echo $g%2 ==0 ? 'even' : 'odd';

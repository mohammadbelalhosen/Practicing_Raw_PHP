<?php

$_REQUEST = $_GET;



$number2 = $_REQUEST['number2'];
if($number2 % 2 == 0){
    echo "<h1> $number2  Number Is Even Number </h1>";

}else{
    echo "<h1> $number2  Number Is Odd Number </h1>";
}


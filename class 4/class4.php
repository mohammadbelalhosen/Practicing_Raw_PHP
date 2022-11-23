<?php

//password hash
//making a simple authentication program

echo "<h2>Making a simple authentication program</h2>";
function authentication($usname, $uspass)
{
    $uname = "belal hosen";
    $upass = "belal34";
    if ($uname == $usname) {
        if ($upass == $uspass) {
            echo "Welcome your Dashboard";
            echo "<br>";
            echo "Your Encrypted pass is: %s", password_hash($upass, PASSWORD_BCRYPT);
        } else {
            echo "Your password is invalid";
        }
    } else {
        echo "Your User Name is Invalid";
    }
}
authentication("belal hosen", "belal34");
echo "<br>";
authentication("belal hosen", "belal34d");
echo "<br>";
authentication("belal hosgen", "belal34");
echo "<br>";



/* 
* Scope in php. three types of scope in php
* Local scope   // inside of function
* Global Scope // outside of function
* Static // Use for few cases
*/

echo "<h2>Example of Scope ..global and static</h2>";
$user = "belal";

function user()
{
    global $user;    //if global variable access in local scope so call global varible
    echo $user;
}
user();
echo "<br>";

function addnumbers($addnumber)
{
    static $number = 0;   //use static scope 
    $number += $addnumber;
    echo "$number <br>";
}

addnumbers(0);
addnumbers(254);
addnumbers(500);
addnumbers(100);


/*
*three types of array in php
* indexing
* associative
* multi dimentional or nested array 
*/

echo "<h2>Example of Array</h2>";
//--------indexing Array Example

// $student = [
//     'Neme',
//     'Roll No',
//     'Reg No',
//     'Moble',
//     'City'
// ];

// echo $student[4];


//-------associative Array Example

$student = [
    'Neme' => 'Belal',
    'Roll No' => '1545',
    'Reg No' => 'reg 12545849',
    'Moble' => '01262878454',
    'City' => 'Chottagram',
    //-------multi dimentional array example
    'books' => [
        'bangla' => 'sahittopat',
        'english' => 'english for today',
        'math' => [
            'sohoj' => 'patigonit',
            'jotil' => 'bijgonit'
        ]
    ]
];
echo "<pre>";
print_r($student);
echo "<pre/>";

$student['City'] = 'barishal';   //update city in array
echo $student['City'];
echo "<br>";
$student['books']['english'] = 'advanced enlish';  //update data in array 
echo $student['books']['english'];
echo "<br>";
echo $student['books']['math']['sohoj'];
echo "<br>";

//using string function there are lots of string fuction

//-------strtoupper,strtolower,ucwords

echo "<h2>Example of string function strtoupper,strtolower,ucwords</h2>";

$username = "belal hosen";
printf("My name is %s", strtoupper($username));
echo "<br>";
printf("My name is %s", strtolower($username));
echo "<br>";
printf("My name is %s", ucwords($username));
echo "<br>";


//----strrev

echo "<h2>Example of strrev string funtion</h2>";
echo str_shuffle(strrev($username));

function solveWords($name)
{
    global $username;
    if ($username == $name) {
        echo "Your anwer is correct";
    } else {
        echo "you are looser";
    }
}

solveWords("belal hosen");
echo "<br>";


//strpos
echo "<h2>Example of strpos string funtion</h2>";
$para = "my name is belal.i am a student";
echo strpos($para, 'am');
echo "<br>";
$email = "belal7349@gamil.com";
if (strpos($email, '@') or strpos($email, '.com')) {
    echo "yes";
} else {
    echo "no";
}


//substr
echo "<h2>Example of substr string funtion</h2>";
$paragraph = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio aspernatur voluptates laborum natus voluptate cum asperiores sed error placeat veritatis.";
echo "<br>";
echo substr($paragraph, 0, 70) . "....";


//str replace

echo "<h2>Example of str_replace string funtion</h2>";

$facecomment = " Tomar picture ta khub baje";
echo "<br>";
echo str_replace('baje', 'sundor', $facecomment);
echo "<br>";



//md5,sha1
echo "<h2>Example of string function md5,sha1</h2>";

$pass = "belal35493";
echo md5($pass);
echo "<br>";
echo sha1($pass);
echo "<br>";
echo password_hash($pass, PASSWORD_BCRYPT);

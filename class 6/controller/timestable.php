<?php

$_REQUEST = $_GET;

echo "<h1>Times Table</h1>";

(int)$number = $_REQUEST['number'];
for($ttable = 1;$ttable <= 10; $ttable++){
    $result = $_REQUEST['number'] * $ttable;
    echo "<br> $_REQUEST[number] * $ttable = $result ";
}

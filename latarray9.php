<?php
$transport = array('foot', 'bike', 'car', 'plane');
echo "<pre>";
print_r ($transport);
echo "</pre>";
//mode
$mode = current($transport);
echo $mode."<br>"; // $mode =

$mode = next($transport);
echo $mode."<br>"; // $mode =

$mode = current($transport);
echo $mode."<br>"; // $mode =

$mode = prev($transport);
echo $mode."<br>"; // $mode =

$mode = end($transport);
echo $mode."<br>"; // $mode =

$mode = current($transport);
echo $mode."<br>"; // $mode =
?>
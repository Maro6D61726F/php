<?php
$array = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);
function xprint($x)
{
    foreach ($x as $A => $A_value) {
        echo $A . '=>' . $A_value . "<br>";
    }
}
echo "ascending order sort by value:<br>";
asort($array);
xprint($array);
echo "ascending order sort by key:<br>";
ksort($array);
xprint($array);
echo "descending order sort by value:<br>";
arsort($array);
xprint($array);
echo "descending order sort by key:<br>";
krsort($array);
xprint($array);
?>
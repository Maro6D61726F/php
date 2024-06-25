<?php
$age = 10;

switch ($age) {
    case $age < 5:
        echo "Stay at home";
        break;
    case $age == 5:
        echo "Go to Kindergarden";
        break;

    case $age > 5 && $age < 13:
        for ($i = 6; $i <= 12; $i++) {
            if ($age == $i) {
                $grade = $age - 5;
                echo "Go to grade $grade";
            } else continue;
        }
}
?>
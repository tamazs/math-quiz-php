<?php
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $sum = $number1 + $number2;

    $result = $_POST["result"];

    if ($sum == $result) {
        echo "Your answer is right!";
    } else {
        echo "Your answer is wrong! The right answer is: $sum.";
    }
?>

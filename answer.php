<?php
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    $result = $_POST["result"];

    if ($number1 + $number2 == $result) {
        echo "Your answer is right!";
    } else {
        echo "Your answer is wrong! The right answer is: $result.";
    }
?>

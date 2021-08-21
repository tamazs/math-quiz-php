<?php

    if($_POST['check']) {

        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];

        $sum = $number1 + $number2;
        $check = $sum === $number3;
        $result = $check ? 'true' : 'false';

        echo "Your answer is: ".$result;
    };
?>

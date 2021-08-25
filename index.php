<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math quiz</title>
</head>
<body>
    <?php
        $number1 = rand(1,100);
        $number2 = rand(1,100);

        echo "What is $number1 + $number2?"
    ?>

    <form action="answer.php" method="post">
        <label for="result">Result</label>
        <input type="number" name="result">

        <input type="hidden" name="number1" value="<?php echo $number1; ?>">
        <input type="hidden" name="number2" value="<?php echo $number2; ?>">

        <button type="submit">Check answer</button>
    </form>
</body>
</html>
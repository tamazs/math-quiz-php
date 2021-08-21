<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math quiz</title>
</head>
<body>
    <form action="answer.php" method="post">
        <p name="number1"><?php echo rand(1,100) ?></p>
        <p name="number2"><?php echo rand(1,100); ?></p>
        <input type="number" name="number3">
        <input type="submit" name="check" value="Check"></input>
    </form>
</body>
</html>
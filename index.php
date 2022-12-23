<?php
declare(strict_types=1);
include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple OOP Calculator</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <p>My own calculator</p>
        <input type="number" name="num1" placeholder="First number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Subtration</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>
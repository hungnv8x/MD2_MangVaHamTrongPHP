<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="number1" placeholder="Input Number1">
    <select name="calculator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="number2" placeholder="Input Number2">
    <button>Calculator</button>
</form>
<?php
function calculator($x, $y, $cal)
{
    switch ($cal) {
        case "+":
            return $x + $y;
        case "-":
            return $x - $y;
        case "*":
            return $x * $y;
        case "/":
            if (($x == 0 && $y == 0) || $y == 0) {
                throw new Exception("/ by zero");
            }
            return $x / $y;
    }
}

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $cal = $_POST["calculator"];
    }
    ?>
    <p>Result : <?php echo calculator($number1, $number2, $cal); ?></p>
    <?php
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
</body>
</html>

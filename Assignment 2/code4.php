<html>
<head>
    <title>Different Operators Demo CODE 4</title>
</head>
<body>
<?php

$number1 = '57';
$number2 = '105';

$number3 = '90';
$number4 = '-109';
$number5 = '150';
$number6 = '81';


echo "<h3>I am demonstrating different arithmetic functions</h3>";
echo "Addition of ".$number1." and ".$number2. " is: ". ($number1 + $number2) ."<br><br>";
echo "Subtraction of ".$number1." and ".$number2. " is: ". ($number1 - $number2) ."<br><br>";
echo "Division  of ".$number1." and ".$number2. " is: ". ($number1 / $number2) ."<br><br>";
echo "Multiplication  of ".$number1." and ".$number2. " is: " .($number1 * $number2) ."<br><br>";

echo "The Square Root of " .$number6 ." is ". (sqrt($number6))."<br><br>";

echo "The Square of " .$number5 ." is ". (pow($number4,2))."<br><br>";

echo "The Binary Value of " .$number3 ." is ". (decbin($number6))."<br><br>";

echo "The Octal Value of " .$number6 ." is ". (decoct($number6))."<br><br>";



?>
</body>
</html>

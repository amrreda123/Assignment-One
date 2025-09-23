<?php
// Ex 1
echo "<h3 style='color:red;'> One </h3>";
$name = "Amr Reda";
echo "Hello, $name";
// Ex 2
echo "<h3 style='color:red;'> Two </h3>";
$num1 = 5;
$num2 = 10;
ECHO "<H4>";
echo "Summation This $num1 + $num2 => " . ($num1 + $num2) . "<br>";
echo "Multiplication This $num1 * $num2 => " . ($num1 * $num2) . "<br>";
echo "Subtraction This $num1 - $num2 => " . ($num1 - $num2) . "<br>";
ECHO "</H4>";
// Ex 3
echo "<h3 style='color:red;'> Three </h3>";
$A = 1;
$B = 2;
$C = 3;
$D = 4;
$X = ($A * $B) - ($C * $D);
echo "Difference = " . $X . "<br>";
if ($X > 0) {
    echo "The Result is Positive";
} elseif ($X < 0) {
    echo "The result is Negative";
} else {
    echo "The Result is Zero";
}
// Ex 4
echo "<h3 style='color:red;'> Four </h3>";
$N = 13;
$M = 12;
echo "Sum = " . $N % 10 . " + " . $M % 10 . " = " . $N % 10 + $M % 10;

// Ex 5
echo "<h3 style='color:red;'> Five </h3>";
$NU = 3569;
ECHO ((int)($NU / 1000) % 2 == 0)?
    "In $NU The First Digit Is " . (int)($NU / 1000) . "and Its Even":
    "In $NU The First Digit Is " . (int)($NU / 1000) . " and Its ODD";

// EX 6
echo "<h3 style='color:red;'> Six </h3>";
$Memo = 15;
$Moms = 7;
$K = 3;
if ($Memo % $K == 0 && $Moms % $K == 0) {
    echo "Both";
} elseif ($Memo % $K == 0) {
    echo "Memo";
} elseif ($Moms % $K == 0) {
    echo "Moms";
} else {
    echo "No One";
}
// Ex 7
echo "<h3 style='color:red;'> Seven </h3>";

$X = 65;
$tens = (int)($X / 10);
$ones = ($X % 10);
echo (($ones != 0 && $tens % $ones == 0) || ($tens != 0 && $ones % $tens == 0));
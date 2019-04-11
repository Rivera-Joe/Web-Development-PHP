<html>
<head>
<title>Lab 6</title>
<style>
h1{
color: teal;}
</style>
</head>
<body>

<?php
//Block 1
function prntTitle($sec){
echo "<h1>Part $sec</h1>";}
prntTitle("A");

function brk(){
echo "<br />";}

$x = 20;
$y = 15;
$z = 13;
echo ($x * $y);
brk();
echo ($y + $z);
brk();
echo ($x - $z);
brk();
echo ($x / $y);
brk();
echo ($y * $z);
brk();

?>

<?php
//Block 2
prntTitle("B");
$num = 26;
if (($num % 2) == 1){
echo "$num is odd.";}
if (($num % 2) == 0){
echo "$num is even.";}
brk();
?>

<?php

//Block 3
prntTitle("C");
$x = 58;
$x += -8;
echo $x;
brk();

$x = 80;
$x += $x+7;
echo $x;
brk();

$x = 80;
$x += ($x+7);
echo $x;
brk();

$x = 40;
$x -= 20;
echo $x;
brk();

$x = 18;
$x -= $x-7;
echo $x;
brk();

$x = 18;
$x -= ($x-7);
echo $x;
brk();

$x = 22;
$x *= 116;
echo $x;
brk();

$x = 12;
$x *= $x*4;
echo $x;
brk();

$x = 12;
$x *= ($x*4);
echo $x;
brk();

$x = 84;
$x /= 4;
echo $x;
brk();

$x = 25;
$x /= $x/5;
echo $x;
brk();

$x = 25;
$x /= ($x/5);
echo $x;
brk();

$x = 5;
$x %=4;
echo $x;
brk();

$x = 14;
$x %= $x%5;
echo $x;
brk();

$x = 14;
$x %= ($x%5);
echo $x;
brk();


?>

<?php
//Block 4
prntTitle("D");
$a = 58;
$b = 16;
$c = 8;
$x = $a + $b / $c;
echo $x;
brk();

$a = 58;
$b = 16;
$c = 8;
$x = ($a + $b) / $c;
echo $x;
brk();

$a = 5;
$b = 10;
$c = -2;
$x = $b - $c * $a;
echo $x;
brk();

$a = 5;
$b = 10;
$c = -2;
$x = ($b - $c) * $a;
echo $x;
brk();

$a = 40;
$b = 20;
$c = 10;
$x = $a + $b - $c / $c + $a;
echo $x;
brk();

$a = 40;
$b = 20;
$c = 10;
$x = $a + $b - $c / ($c + $a);
echo $x;
brk();

$a = 15;
$b = 5;
$c = 2;
$x = $c * $a / $a - $b - $b;
echo $x;
brk();

$a = 15;
$b = 5;
$c = 2;
$x = ($c * $a) / ($a - $b) - $b;
echo $x;
brk();
?>

<?php
//Block 5
prntTitle("E");

$x = 16;
echo ++$x;
brk();

$x = 16;
echo $x++;
brk();

$x = 4;
echo --$x;
brk();
echo $x;
brk();
$x = 4;
echo $x--;
brk();
echo $x;
brk();
?>

<?php
//Block 6
prntTitle("F");

$x1 = 25;
$x2 = 23;
$z = $x1 > $x2;
echo $z;
brk();

$x1 = 25;
$x2 = 23;
$z = $x1 < $x2;
echo (int)$z;
brk();

$x1 = 5;
$x2 = 10;
$z = $x1 >= $x2;
echo (int)$z;
brk();

$x1 = 5;
$x2 = 10;
$z = $x1 <= $x2;
echo (int)$z;
brk();

$x1 = 8;
$x2 = 8;
$z = $x1 == $x2;
echo (int)$z;
brk();

$x1 = 8;
$x2 = 8;
$z = $x1 !== $x2;
echo (int)$z;
brk();

$x1 = 4;
$x2 = "4";
$z = $x1 <> $x2;
echo (int)$z;
brk();

$x1 = 8;
$x2 = 8;
$z = $x1 != $x2;
echo (int)$z;
brk();

$x1 = "22";
$x2 = 22;
$z = $x1 === $x2;
echo (int)$z;
brk();

$x1 = "22";
$x2 = "22";
$z = $x1 === $x2;
echo (int)$z;
brk();

$x1 = "Terry";
$x2 = "terry";
$z = $x1 === $x2;
echo (int)$z;
brk();

$x1 = "I want a cookie.";
$x2 = "Labs make me crazy.";
$z = $x1 > $x2;
echo (int)$z;
brk();

$x1 = "X54xam32";
$x2 = "x54XAM32";
$z = $x1 > $x2;
echo (int)$z;
brk();
?>

</body>
</html>
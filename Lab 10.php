<html>
<head>
<title>Lab 10</title>
</head>

<body>
<?php
//function to print section title
function title($section){
echo "<h1>Section $section</h1>";
}
title("A");
//Part A
//first while loop
$x = 0;
while ($x<10){
echo $x . "<br />";
$x++;
}
?>

<?php
//Part B
title("B");
$count1 = 1;
$count2 = 20;

while ($count1 > 0 && $count2 <= 20 && $count2 > 0){
echo $count2 . "<br />";
$count2 -= 2;}

?>


<?php
//Part C
title("C");
$z = 10;

do{
echo $z . "<br />";
$z--;}
while($z >= 9);

?>

<?php
//Part D
title("D");

$m = 12;

do{
echo "I am thoroughly enjoying PHP and JavaScript!<br />";
$m--;
}
while($m > 0);
echo 'The last value of $m is ' . $m;

?>

<?php
//Part E
title("E");
$fruit = array("apple", "banana", "mango", "grape", "watermelon", "pineapple", "peach");
foreach($fruit as $item){
echo "My favorite fruit pie is " . $item . ".<br />";}
?>

<?php
//Part F
title("F");
$sounds = array('horn' => 'honk', 'phone' => 'ring', 'fingers' => 'snap', 'computer' => 'beep');
foreach($sounds as $key => $value){
echo $key . " is " . $value . "<br />";}
?>

<?php
//Part G
title("G");
echo "<p><b>Example of using the <i>break</i> statement:</b></p>";

//first loop
for($i = 5; $i <=15; $i++){
	if($i == 9){break;}
echo "The number is " . $i;
echo "<br />";}

echo "<p><b>Another example of using the <i>break</i> statement:</b></p>";
//second loop

$x = 3;
$y = 10;
while ($x < 7){
	while ($y < 15){
		if ($y == 5){break 2;}//breaks out of the two while loops
		$y++;
		}
	$x++;
}
echo "The first number is " . $x . "<br />";
echo "The second number is " . $y . "<br />";
?>

<?php
//Part H
title("H");
$i = 7;

while($i < 14){
$i++;
if ($i == 9){break;}
}
echo "The loop stopped at i = $i.";
?>

<?php
//Part I
title("I");

echo "<p><b>Example of using the <i>continue</i> statement:</b></p>";

for ($i = 2; $i <=8; $i++){
	if ($i == 3){continue;}
	echo "The number is " . $i;
	echo "<br />";
}


?>

<?php
//Part J
title("J");

$array = array( 8, 9, 10, 11, 12);
foreach( $array as $value){
if ($value == 10){continue;}
echo "Value is $value. <br />";
}


?>
</body>
</html>
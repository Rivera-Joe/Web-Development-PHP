<html>
<head>
<title>PHP Lab 3</title>

<!--Block One -->
<?php

$name = "Joe";   //1
$age = 25;   //2
$isEmployed = true;  //3
$car = "Jeep";  //4
$gender = "male";  //5
$height = "5'10\"";  //6
$DoB = "12-28-93";  //7
$petName = "Rayleigh";  //8
$canDance = false;  //9
$canSing = false;  //10

echo "Name: $name<br />";

echo "Age: $age<br />";

if($isEmployed == 1){
echo "Employed: True<br />";}

echo "Car: $car<br />";
echo "Gender: $gender<br />";
echo "Height: $height<br />";
echo "Date of Birth: $DoB<br />";
echo "Pet's name: $petName<br />";

if($canDance === false){
echo "Can Dance: False<br />";}

if($canSing == 0){
echo "Can Sing: False<br />";}

?>

<!--Block Two -->
<?php
$placeOfWork = $employer = $moneyProvider = $billHelper = "H-E-B";
echo "$placeOfWork is where I work.<br />";
echo "$employer is my employer.<br />";
echo "$moneyProvider is where I get my checks from.<br />";
echo "$billHelper is who basically pays my bills.<br />";
?>

<!-- Block Three -->
<?php

$cost = 8.50;
function totalPrice(){
$tax = 2.50;
echo "<h2>Value of variables inside the function:</h2>";
echo "Variable cost is: $cost";
echo "<br />";
echo "Variable tax is: $tax";}

totalPrice();

echo "<h2>Value of variables outside the function:</h2>";
echo "Variable cost is: $cost";
echo "<br />";
echo "Variable tax is: $tax";
?>

<!-- Block Four -->
<?php
echo "<br /><br />";
$song = "Island - Coheed and Cambria";
$favSong = &$song;
echo "Favorite song is: $song<br />";
echo "Favorite song is: $favSong<br />";
?>

</head>
<body>




</body>
</html>
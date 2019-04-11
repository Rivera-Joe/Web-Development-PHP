<html>
<head>
<title>Lab 8</title>
</head>
<body>
<?php
function prntT($letter){
echo "<h1 style = \"background-color: #000000; color: #ffffff;\">Section " . $letter . "</h1>";}
prntT("A");

$color = "blue";
if ($color == "blue"){
echo "the color chosen was ", $color, "!<br />";}

?>

<?php
prntT("B");
$favNum = 28;
if ($favNum <=30){
echo "favorite number is less than or equal to 30.<br />";
}

?>

<?php
prntT("C");

$car = "Jeep";

if (strlen($car) >=3){
echo "variable 'car': $car contains 3 or greater characters.<br />";}
else{
echo "variable 'car': $car contains less than 3 characters.<br />";}
?>

<?php
prntT("D");

if (strpbrk($car, 'z')){
echo "variable 'car': $car contains the letter z.<br />";}
else{
echo "letter 'z' is not found in variable 'car': $car.<br />";}
?>

<?php
prntT("E");
if (strpos($car, 'p') == 1){
echo "The letter 'p' in 'car': $car is in the second position.<br />";}
elseif(strpos($car, 'p') == 3){
echo "The letter 'p' in 'car': $car is in the fourth position.<br />";}
else{
echo "I am terrible at string positions and dont understand the use.<br />";}
?>

<?php
prntT("F");
if (strstr($car, 'e')==="eep"){
echo "the letters from the first occurence of the letter 'e' are 'eep'.<br />";}
elseif (strstr($car, 'e', true) === "eep"){
echo "somehow Jeep is spelled wrong in my string.<br />";}
elseif (strlen($car) == 5){
echo "There are six letters in the word Jeep.<br />";}
elseif (substr($car, -2) === "p"){
echo "Somehow the last two letters are equal to 'p'<br />";}
elseif($car == "Mazda"){
echo "waaaaaait... I can't type >.><br />";}
else{
echo "Seriously? nothing happened?<br />";}
?>

<?php
prntT("G");
$temp = "cold";
$color = ($temp == "hot") ? "red" : "blue";
echo $color;
echo "<br /><br />";

?>


<?php
prntT("H");
$dessert = $healthy = "yes";
$order = ($dessert == "yes") ? (($healthy == "no") ? true : false) : false;
echo(int)$order;
?>

<?php
prntT("I");
$widgets = "22.55";
if ($widgets == "22.55"){
$numOrdered = "These are too expensive!";}
else{
$numOrdered = "What is the REAL cost?";}
echo $numOrdered;
?>

<?php
prntT("J");
$car = $gas = "yes";
if ($car == "yes"){

	if ($gas == "yes"){
	$transportation = true;}
		else{
		$transportation = false;}
	}
else{
$transportation = false;}

echo (int)$transportation;
?>



</body>
</html>
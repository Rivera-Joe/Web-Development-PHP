<html>
<head>
<title>Lab 9</title>
</head>
<body>

<?php
//Part A
function prntT($sec){
echo '<h1 style = "color : #ffff00; background-color: #0000ff; text-decoration: underline;">Part ' . $sec . '</h1>';}

prntT("A");
$number = 25;
switch($number){
case 10:
echo "number is set to 10";
break;

case 20:
echo "number is set to 20";
break;

case 25:
echo "number is set to 25";
break;

default:
echo "number was not set to 10, 20, or 25";
break;
}
?>

<?php

//Part B
prntT("B");
$show = "Love is War";

switch($show){
	case "Men in Black":
	echo "I like MIB.";
	break;
	
	case "Home Improvement":
	echo "The show I chose was Home Improvement.";
	break;
	
	case "Chill Factor":
	echo "I chose Chill Factor.";
	break;
}

	
?>

<?php
//Part C
prntT("C");
$Letter = "J";
switch($Letter){
	case "A":
	echo "I chose letter A.<br />";
	break;
	
	case "D":
	echo "I chose letter D.<br />";
	break;
	
	case "G":
	echo "I chose letter G.<br />";
	break;
	
	case "I":
	echo "I chose letter I.<br />";
	break;
	
	case "N":
	echo "I chose letter N.<br />";
	break;
	
	default:
	echo "I chose neither A, D, G, I, or N. The letter I chose was J.<br />";
	break;
}

?>

<?php
//Part D
prntT("D");
$name = "Dianne";

switch($name){
	case "Jonny":
	echo " Kyle said that Jonny did it.<br />";
	break;
	
	case "Dianne":
	echo "Jonny said it was Dianne.<br />";
	
	case "Casey":
	echo "Dianne said it was Casey.<br />";
	break;
	
	case "James":
	echo "Casey said it was James.<br />";
	break;
	
	case "Kyle":
	echo "James said that it was Kyle.<br />";
	break;
	
	default:
	echo "We have no idea who did it.<br />";
	break;
}
	

?>

<?php
//Part E
prntT("E");

$newNum = 30;

switch(true){
	case $newNum<20:
	echo "The new number is less than 20.";
	break;
	
	case $newNum>=40:
	echo "The new number is greater than or equal to 40.";
	break;
	
	case $newNum>=30:
	echo "The new number is greater than or equal to 30.";
	break;
	
	default:
	echo "The new number is greater than 20 but less than 30.";
	break;
}
	
?>



<?php
//Part F
prntT("F");

$className = "PHP";
switch($className){
	case "JavaScript":
	echo "This class is JavaScript.";
	break;
	
	case "PhotoShop":
	echo "This class is PhotoShop.";
	break;
	
	case "PHP":
	echo "This class is PHP.";
	break;
	
	default:
	echo "The class name is not registered.";
	break;
}


echo "<br />";

if ($className == "JavaScript"){
echo "This class is JavaScript.";}

elseif ($className == "PhotoShop"){
echo "This class is PhotoShop.";}

elseif ($className == "PHP"){
echo "This class is PHP.";}

else{
echo "This class name is not registered.";}


echo "<br />";



echo '<h1 style = "color : #ffff00; background-color: #0000ff; text-decoration: underline;">Extra</h1>';
/*										***********NOTE**************
				I added this line of code to see if I could use the Ternary Operator Correctly.			*/
echo $statement = ($className == "JavaScript") ? "This class is JavaScript." : 
($className == "PhotoShop") ? "This class is PhotoShop." :
($className == "PHP") ? "This class is PHP." : "This class name is not registered.";



?>



</body>
</html>
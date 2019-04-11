<html>
<head>
<title>Lab 11</title>
</head>
<body>
<?php
//Part A
function title($letter){
echo "<h1>Part " . $letter . "</h1>";}
title("A");
$myArray = array();
$myArray[0] = "alpha";
$myArray[1] = "bravo";
$myArray[2] = "charlie";
$myArray[3] = "delta";
$myArray[4] = "echo";
$myArray[5] = "foxtrot";
$myArray[6] = "gulf";
$myArray[7] = "hotel";
$myArray[8] = "india";
$myArray[9] = "juliet";

foreach($myArray as $name){
echo "$name <br />";}

?>

<?php
//Part B
title("B");
$secondArr = array("chevrolet", "jeep", "ford", "dodge", "mercedes");
for( $i = 0; $i < count($secondArr); $i++){
	if($i%2 == "1"){
		echo $secondArr[$i] . "<br />";}
	}
?>

<?php
//Part C
title("C");
$numMyArr = count($myArray);
$numSecond = count($secondArr);
echo "$numMyArr <br />$numSecond";

?>

<?php
//Part D
title("D");
$a1Array = array("Rayleigh" => "Dog", "Lily" => "Cat", "Foghorn" => "Rooster", "Favorite Number" => 28, "Last Name" => "Rivera");
foreach($a1Array as $being => $classification){
echo $being . ": " . $classification . "<br />";}
?>

<?php
//Part E
title("E");
$houseHold["Sister"] = "Carolyn";
$houseHold["Mother"] = "Dianne";
$houseHold["Father"] = "Joe SR";
$houseHold["Name"] = "Joe JR";
$houseHold["Dog"] = "Rayleigh";
foreach($houseHold as $key => $value){
echo "My " . $key . " is " . $value . "<br />";}

?>
<?php
//Part F
title("F");
echo "\$MyArray is:<br />";
foreach($myArray as $number){
echo $number . "<br />";}
echo "<br />The Reverse of that array is: <br />";
$revNum = array_reverse($myArray);

foreach($revNum as $item){
echo $item . "<br />";}

//This one was actually kind of tricky
echo "<br />\$secondArr has:<br />";
foreach($secondArr as $car){
echo $car  . "<br />";}
echo "<br />I will swap " . $secondArr[1] . " for " . $myArray[0] . "<br />";
echo "as well as " . $secondArr[2] . " for Audi.<br />";


$Swap = array(1 => $myArray[0], 2 => "Audi");
$newBrands = array_replace($secondArr, $Swap);
foreach($newBrands as $makers){
echo $makers . "<br />";}
?>



</body>
</html>
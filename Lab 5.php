<html>
<head>
<title>Lab 5</title>
<?php

function prntTitle($section){
echo "<h1 style = \"color: blue;font-family: impact;\">Section: $section</h1>";}
?>
</head>
<body>
<!-- Part A -->
<?php
prntTitle("A");
echo "My favorite number is six" . "teen.";
echo "<br />";
echo "1" . "6";
echo "<br />";
echo 1 . 6;
echo "<br />";
echo 1.6;
echo "<br />";
echo 1+6;
echo "<br />";
?>

<!-- Part B -->
<?php
prntTitle("B");
function brk(){
echo "<br />";}

echo "My birth year is 19" . "93";
brk();
echo 19 . 93;
brk();
echo 9.3;
brk();
echo 9+3;
brk();
?>
<!-- Part C -->
<?php
prntTitle("C");
$first = "Joe ";
$last = $first . "Rivera";
echo "My name is $last<br />";

?>


<!-- Part D -->
<?php
prntTitle("D");
$city = "League City, ";
$state = $city . "Texas";
echo "I live in $state";
brk();

?>

<!-- Part E -->
<?php
prntTitle("E");
$myName = "Joe ";
$myName .= "Rivera";
echo "My name is $myName<br />";
?>


<!-- Part F -->
<?php
prntTitle("F");
$myCar = "Jeep";
$myCar .=" Patriot";
echo "I drive a $myCar<br />";
?>

<!-- Part G -->

<?php
prntTitle("G");
$total = 365;
echo "Cost: " . $total + 4;
brk();
echo "Cost: " . ($total + 4) . "<br />";
?>

<!-- Part H -->
<?php
prntTitle("H");
$exhaust = 715.99;
$tax = (8/100);
echo "Total price after tax is: " . round(($exhaust+($exhaust*$tax)),2);
brk();
?>

<!-- Part I -->
<?php
prntTitle("I");
$ssNumber = '-44-';
echo '414$ssNumber1414';
brk();
echo "414" . $ssNumber . "1414";
brk();
echo '414{$ssNumber}1414';
brk();
echo "414{$ssNumber}1414";
brk();
?>

<!-- Part J -->
<?php
prntTitle("J");
$DoB = '/28/';
echo "12" . $DoB . "1993";
brk();
echo "12{$DoB}1993";
brk();
?>

</body>
</html>
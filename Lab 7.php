<html>
<head>
<title>Lab 7</title>
</head>
<body>

<?php
echo "<h1 style = \"text-align:center\">PHP Lab 7</h1>";
function printBlock($num){

echo "<h1 style = \"background-color: #000000; color: #ffffff; width: 375px;\">Block " . $num . "</h1>";}


printBlock("1");
function brk(){
echo "<br />";}

//1
define("myName", "Joe Rivera", true);
echo myname;
brk();

//2
define("AGE", "25");
echo AGE;
brk();

//3
define("song", "The Dark Sentencer", true);
echo SONG;
brk();

//4
define("movie", "Enemy at The Gates");
echo movie;
brk();

//5
define ("dog_age", "My dog is 1 year and 3 months old!");
echo dog_age;
brk();

//6
define ("vacation", "Japan");
echo vacation;
brk();

//7
define ("favBand", "Coheed and Cambria");
echo favBand;
brk();

//8
define ("bTrain", "Shinkansen", true);
echo btrain;
brk();

//9
define ("drink", "Gatorade");
echo drink;
brk();

//10
define ("Classtime", "Web Authoring starts at 12:10 PM", true);
echo classtime;
brk();

?>


<?php
printBlock("2");

define("MESSAGE", "Hello world.");
echo MESSAGE;
brk();

define("name", "Terry Hanks");
echo name;
brk();

define("Age", "32");
echo Age;
brk();

define ("city", "Houston", true);
echo city;
brk();
echo CITY;
brk();

define ("NOTE", "Buy bread and milk.", true);
echo note;
brk();
?>

<?php
printBlock("3");
$Addressees = "Student";
$year = "2013";
$Academic = "Professors";
$Admin = "College Administrators";
define ("Student_Count", 28000, true);
define ("Salary", 20, true);
define ("Increase", 16, true);

echo"<p>Hello ", $Addressees, "!<br />";
echo "The $Addressees count for this semester is ", STUDENT_COUNT, " which is higher than in $year.<br />";
echo "Hello ", $Academic, "!<br />";
echo "The $year's percentage of increase is approximately ", increase, " percent overall.<br />";
echo "Hello ", $Admin, "!<br />";
echo "Your $Academic have earned their salary increase of ", SALARY, " percent.</p>";
brk();
?>

<?php
printBlock("4");

define ("STATEMENT1", "My favorite color is blue.");
define ("STATEMENT2", STATEMENT1);

echo STATEMENT1, "<br />";
echo STATEMENT2;
brk();

//My examples
define ("YellowBrick", "Follow the yellow brick road!");
define ("road", YellowBrick);
echo YellowBrick;
brk();
echo road;
brk();

define("set1" , "This is a multi-line setup");
define("set2", set1);
define("set3", set2);
echo set1;
brk();
echo set2;
brk();
echo set3;
brk();
?>




</body>
</html>
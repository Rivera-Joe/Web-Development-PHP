<html>
<head>
<title>PHP Lab 4</title>

<style>
body{
background-color: #000000;
color: #ffffff;
font-size: 24px;
font-family: comic sans ms;}
</style>

</head>
<body>

<!-- Block one -->
<?php
echo "<h1>Part 1</h1>";
echo 'This is a great learning experience!<br />'; //a
echo 'I\'ll try to get my work completed on time this semester.<br />'; //b
echo 'I think that\'s my cookie you\'re eating.<br />'; //c
echo 'I always like to use the excuse, "the dog ate my homework," whenever I\'m unprepared for class.<br />'; //d
echo 'I\'m certain that\'s Terry\'s cookie you\'re eating. I believe he\'s correct when he stated, "That\'s mine!"<br />'; //e
?>


<!-- Block two -->
<?php

//first set
$name = "Joe";
$age = 25;
echo "<h1>Part 2</h1>";

echo 'My name is $name, and I am $age years old.<br />'; 
echo 'My name is '.$name. ' and I am '.$age. ' years old.<br />';

//second
$nickname = "Moose";

echo 'Around the office, I\'m known as "$nickname".<br />';
echo 'Around the office, I\'m known as "'.$nickname.'".<br />';

//third
$cost = "11.25";
$item = "bundle of socks";

echo 'I\'m planning to spend $$cost on a "new" $item.<br />';
echo 'I\'m planning to spend $'.$cost.' on a "new" '.$item.'.<br />';

//fourth
//Come back to this one

$webURL = "www.google.com";
echo "<a href=\"http://" . '$webURL' . "/\">Visit my site</a>";
echo "<br />";
echo "<\fa href=\"http://$webURL/\">Visit my site<\f/a>";
echo "<br />";

//fifth
$name = "Jack";
$driveLetter = "F";
$folderName = "Java";
$fileName = "SpaceGame";
echo '$name deleted $driveLetter :\$folderName\$fileName<br />';
echo ''.$name.' deleted '.$driveLetter.':\\'.$folderName.'\\'.$fileName.'<br />';


?>

<!-- Block three -->
<?php
echo "<h1>Part 3</h1>";

$great = '<script>alert("You are GREAT!")</script>';
$chapter = "<h1>Chapter 1:\" The Stone Age\"</h1>";
echo htmlspecialchars($great)."<br />";
echo htmlspecialchars($chapter)."<br />";


$answer = '<script>alert(It converts HTML.)</script>';
echo htmlspecialchars($answer) . "<br />echo ";
echo "\"The function is: htmlspecialchars(\$answer).\"";
echo "<br />";

?>

<!--Block four -->
<?php
echo "<h1>Part 4</h1>";

echo <<<FS
<span style = "color: red">
This is my "first" usage of 
heredoc. <br />It is going to be 'very'
useful in the future for me.<br />I believe this
text block should suffice for this lab.<br />
I will add one more line of text.</span><br />
FS;

$snack = "cookies";
$drink = "orange sunkist";
echo <<<SS
<span style = "color: #00ccee">
This is the second set of lines using
'HEREDOC'.<br />
To use heredoc, you can either 'assign' your block of text<br />
to a variable, and then echo it using the echo construct,<br />
or you can just echo it straight to the page as a "string of text".<br />
You can even print out variables, such as: $snack and $drink.<br />
Second heredoc block of text is "finished".</span><br />
SS;


$favMovie = "Enemy at the Gates";
$mainStar = "Jude Law";
$supAct = "Rachel Weisz";
$newText = <<<TS
<span style = "color: teal">
My favorite movie is called "$favMovie".<br />
The 'main actor' in that movie is $mainStar.<br />
It is about a sniper during WWII that was a huge threat to the Nazi Regime.<br />
The 'supporting actress' in that movie is my FAVORITE female actor.<br />
Her name is $supAct.<br />
I cannot recomment this movie enough to anyone who is a fan of "war" movies.</span><br />
TS;
echo $newText;


?>


</body>
</html>
<!-- SandhuNarinder -->
<?php
// create two variables
$Base = 4.500;
$Height = 5.25;

// area variable and equal to half
$Area = 0.5*($Base * $Height);

$Area = Round($Area,3);

//display the text
echo "<p> The area of the triangle is: </P>".$Area;

define("MY_NAME","SandhuNarinder");
echo "</br> My first name is <strong>".strtoupper(MY_NAME)."</strong>";

?>
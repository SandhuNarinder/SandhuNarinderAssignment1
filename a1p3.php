<!-- SandhuNarinder8622382 -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<?php

//  sortingg the list
$script = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
	
	echo $script;
	$str_array = explode(' ', $script);
	
	sort($str_array);
	
	$strlength = count($str_array);
	echo "<p>Here is the sorted list :</p>";
	for($x=0; $x < $strlength; $x++)
	{
		echo $str_array[$x];
		echo " ";
	}
// find duplicate characters

	function uniqueChar($str){
		//for loop
		for($i = 0; $i < strlen($str); $i++) 
		{ 
			for($j = $i + 1; $j < strlen($str); $j++) 
			{ 
				//checking the duplicate characters
				if($str[$i] == $str[$j]) 
				{ 
					return true; 
				} 
			} 
		} 
		
		return false; 
	} 
	
	
	 if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if(!empty($_POST['firstname'])){
				//checking unique/duplicate characters for firstname field
				$checking = uniqueChar($_POST['firstname']); 
				
				if($checking == true){
					echo '<p>String Has Duplicate Characters</p>'; 
				}else{
					echo '<p>String Has No Duplicate Characters</p>'; 
				}
			   
			}else{
				echo '<p>Enter String</p>'; 
			}
		}
	
	?>
	<p><b>Checking for duplicate characters:</b> </p>
	
	
<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>
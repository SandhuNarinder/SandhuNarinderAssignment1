<!-- SandhuNarinder8622382 -->
<?php
if($_SERVER['REQUEST_METHOD']  == 'POST') {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
    
    if(empty($fname) || empty($lname))
    {
        echo"Empty feilds not allowed";
    }
    else
    {
        if(!is_numeric($age))
        {
            echo"Enter Age";
        }
        else{
            echo"Thank you for the submission</br>";
            echo"First Name: ".$fname."</br> Last Name: ".$lname."</br> Age: ".$age."</br>";
        }
    }
    if(isset($_POST['newsletter'])){
        $newsletter = $_POST['newsletter'];
        echo "newsletter: ".$newsletter;
    }
    else{
        echo "Pls fill newsletter";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value = "<?php
        if(isset($_POST['firstname'])){
            echo $_POST['firstname'];
        }
        ?>"> </label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value = "<?php
        if(isset($_POST['lastname'])){
            echo $_POST['lastname'];
        }?>">
        </label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value = "<?php
        if(isset($_POST['age'])){
            echo $_POST['age'];
        }
        ?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>
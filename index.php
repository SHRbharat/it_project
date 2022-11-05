<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <title>2020CSC1058-IT ASSIGNMENT</title>
  </head>
  
<body>
<?php
	include "include/header.php";
?>

<div class="topnav">
	<div class="input-conatiner">
		<form method="post" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

		'NEW' CSV FILE : 
		<input type="text" name="new_input_file"></input>
		'OLD' CSV FILE : 
		<input type="text" name="old_input_file"></input>

		<input type="submit" name="fetch-data" placeholder="submit" />

		</form>
	</div>
	<button onclick="tableToCSV()">SAVE AS CSV</button>
</div>


<?php
if($new == true && $new_input_file != ""){
	include "include/new.php";
}
if($new == false && $new_input_file != "" && $old_input_file != ""){
	include "include/old.php";
}
?>

<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<script src="js/script.js"></script>
</body>
</html>
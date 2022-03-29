<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Blog</title>
</head>
<body>

<?php

	if(isset($_POST["name"]) && isset($_POST["pass"])){
		$name = $_POST["name"];	
		$pass = $_POST["pass"];
		$results = DB::select('select * from Info', array(1));;
		//echo $results;
	}
?>
<form method = "POST" action="">
	Username <input type="text" placeholder="Username" name="name"><br />
	Password <input type="password" placeholder="Password" name="pass"><br />
	<input type="submit" value="Log in">
</form>
</body>
</html>
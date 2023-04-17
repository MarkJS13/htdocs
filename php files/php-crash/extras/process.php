<?php


if(!empty($_POST))
$name = $_POST['name'];
$age = $_POST['age'];

if($age <= 12) {
	echo "$name is adult";
} else if($age <= 19) {
	echo "$name is teen";
} else if($age <=25) {
	echo "$name is grown up";
} else {
	echo "$name is an adult";
} 


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<form action="process.php" method="post">
	<div>
		<input type="text" name="name">
		<input type="number" name="age">
		<input type="submit">
	</div>

</form>
	
</body>
</html>
<html>
<head>
	<title>Hello World</title>
</head>


<body>


<?php
	$badboy = "Hola!";
	$myarray = array("one", "two", "a" => "b", "four", "five");

	echo "$badboy<br>";
	print_r($myarray);
	echo "<br>";
	echo sizeof($myarray);
	
	$myarray[]="six";
	echo "<br><br>";
	print_r($myarray);
	
	unset($myarray[a]);
	echo "<br><br>";
	print_r($myarray);

/*Array
(
	[0] => a
	[1] => b
)*/
?>

<!--
<form action="process.php" method = "post">
	Enter your name: <input name="name" type="text">
	<input type="submit">
</form>
-->

</body>

</html>

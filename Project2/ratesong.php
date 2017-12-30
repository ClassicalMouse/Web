<html>
<head>
	<title>Create Account Successful</title>
	<style type="text/css">
		body{
			background-color: #F0F8FF;
		}
		h2{
			
		}
		.d01{
			width:580px;

			border-left: 5px solid #00BFFF;
			border-top: 5px solid #00BFFF;
			border-bottom: 5px solid #00BFFF;
			border-right: 5px solid #00BFFF;

			padding-bottom: 50px;
			padding-left: 20px;
			margin-top:60px;
			margin-left: 50px;
			background-color: #FFFFE0;
		}
		.instruction{
			margin-left: 20px;
			font-weight: bold;
		}
		
		#caa1{
			
		}

	</style>
</head>

<body>

	<div class="d01">
		<script language="JavaScript">
			//window.setTimeout("location='http://localhost:8888/Project2/index.php'", 2000);
		</script>
	<?php
		$dbconn = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm") or die('Could not connect: '. pg_last_error());

		$username = $_POST["username"];
		$upassword = $_POST["upassword"];
		$songname = $_POST["songname"];
		$artisttitle = $_POST["artisttitle"];
		$rating = $_POST["rating"];

		$query1="select trackid, max(albumid) from track where trackname like '%$songname%' and trackartist like '%$artisttitle%' group by trackid limit 1";
		$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());
		$buffer1=pg_fetch_result($result1, 0, 0);

		$rdate=date('Y-m-d H:i:s');

		$querytest="select username from rate where username='$username' and trackid='$buffer1'";
		$resulttest=pg_query($querytest) or die('Query failed: ' . pg_last_error());
		$buffer2=pg_fetch_result($resulttest, 0, 0);

		$query="INSERT INTO rate (trackid, username, rating, rdate) values ('$buffer1','$username', '$rating', '$rdate');";

		if($buffer2==$username){
			$query="UPDATE rate set rating='$rating', rdate='$rdate' where username='$username' and trackid='$buffer1'";
		}

		
		
		
		$result = pg_query($query) or die('Query failed: ' . pg_last_error());

		echo '
		<h2>
			Success!
		</h2>
		<p class=instruction> <br>

		</p>';
	?>		
		<form id="form1" action="rate.php" method = "post">
			<input id="username" name="username" type="hidden" value="<?php echo $username; ?>">
			<input id="upassword" name="upassword" type="hidden" value="<?php echo $upassword; ?>">
			<input type="submit" value="return">
		</form>
	</div>
</body>

</html>


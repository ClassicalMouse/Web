<html>
<head>
	<title>Unfollow</title>
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
			
		</script>
	<?php
		$username = $_POST["username"];
		$upassword = $_POST["upassword"];
		$fusername = $_POST["fusername"];

		$fdate=date('Y-m-d H:i:s');
		$query="INSERT INTO follow (username, fusername, fdate) VALUES ('$fusername', '$username', '$fdate');";
		
		$dbconn = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm") or die('Could not connect: '. pg_last_error());
		$result = pg_query($query) or die('Query failed: ' . pg_last_error());



		echo '
		<h2>
			Success!
		</h2>
		<p class=instruction>Welcome! <br>

		</p>';
		echo "
			<form id='formfollow$i' action='followbypage.php' method = 'post'>
			<input name=username type='hidden' value='";echo $username;echo "'>
			<input name=upassword type='hidden' value='";echo $upassword;echo "'>
			<input type='submit' value='Return'>
			</form>";
	?>		
	</div>
</body>

</html>


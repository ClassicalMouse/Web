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
			window.setTimeout("location='http://localhost:8888/Project2/index.php'", 2000);
		</script>
	<?php
		$username = $_POST["username"];
		$upassword = $_POST["upassword"];
		$repeatupassword = $_POST["repeatupassword"];
		$uname = $_POST["uname"];
		$uemail = $_POST["uemail"];
		$ucity = $_POST["ucity"];

		$query="INSERT INTO users (username,upassword, uname, uemail, ucity) values ('$username','$upassword', '$uname', '$uemail', '$ucity');";
		
		$dbconn = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm") or die('Could not connect: '. pg_last_error());
		$result = pg_query($query) or die('Query failed: ' . pg_last_error());

		echo '
		<h2>
			Success!
		</h2>
		<p class=instruction>Welcome! <br>

		</p>';
	?>		
	</div>
</body>

</html>


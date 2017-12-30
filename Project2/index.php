<html>
<head>
	<title>Project2-MD</title>
	<style type="text/css">
		body{
			background-color: #F0F8FF;
		}
		h2{
			text-align: center;
			margin-top:30px;
		}
		.d01{
			text-align: center;
			width:500px;


			border-left: 5px solid #00BFFF;
			border-top: 5px solid #00BFFF;
			border-bottom: 5px solid #00BFFF;
			border-right: 5px solid #00BFFF;


			padding-bottom: 50px;
			margin-top:100px;
			margin-right: auto;
			margin-left: auto;

			background-color: #FFFFE0;
		}
		.instruction{

			/*margin-left: 50px;*/
			font-weight: bold;
		}
		.searchform{
			/*margin-left: 50px;*/
		}
		#caa1{
			margin-left: 20px;
		}

	</style>
</head>

<body>
	<div class="d01">
		<h2>
			MY MUSIC STREAM
		</h2>
		<p class=instruction>Welcome! Please log in or create an account.<br>
		</p>
		<div class="searchform">
			<form action="login.php" method = "post">

				Username:  <input name="username" type="text">
				*
				<br><br>

				Password:  <input name="upassword" type="password">
				*
				<br><br>

				<input type="submit" value="LOGIN">
				

				<button id="caa1" type="button" onclick=location.href='caa1.php'>Create An Account</button>
				<br>


			</form>
		</div>
	</div>
</body>

</html>


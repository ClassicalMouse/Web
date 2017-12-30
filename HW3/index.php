<html>
<head>
	<title>Homework3-MD</title>
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

			padding-left: 20px;
			margin-top:60px;
			margin-left: 50px;
			background-color: #FFFFE0;
		}
		.instruction{
			margin-left: 20px;
			font-weight: bold;
		}
		.searchform{
			margin-left: 20px;
		}

	</style>
</head>

<body>
	<div class="d01">
		<h2>
			Customer Booking
		</h2>
		<p class=instruction>Welcome! In order to book a reservation, please enter the information below.<br>
		<u>Name</u>, <u>Number of people</u> and <u>Time</u> are necessarily required.</p>
		<div class="searchform">
			<form action="search.php" method = "post">

				Name:  <input name="cname" type="text">
				*
				<br><br>

				Keyword:  <input name="keyword" type="text">
				<br><br>

				Number of people:  <input name="NOP" type="text">
				*
				<br><br>

				Time:  <input name="bdate" type="datetime-local" step="1">
				*
				<br><br>
				
				<input type="submit" value="Search">
				<br>

			</form>
		</div>
	</div>
</body>

</html>


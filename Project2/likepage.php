<html>
<head>
	<script type="text/javascript">
			function HomePageSubmit(){
				document.getElementById('formHP').submit();
			}
			function PlaylistSubmit(){
				document.getElementById('formPl').submit();
			}
			function gotoartist(){
				document.getElementById('artistform').submit();
			}
			function Likesubmit(){
				document.getElementById('formlike').submit();

			}
			function followsubmit(){
				document.getElementById('formfollow').submit();

			}
			function RateSubmit(){
				document.getElementById('formrate').submit();
			}
			function followbysubmit(){
				document.getElementById('formfollowby').submit();

			}

	</script>
	<title>Like!</title>
	<style type="text/css">
		body{
			background-color: #F0F8FF;
		}
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 700px;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
		iframe{
			margin-right: 5px;
			margin-bottom: 5px;
		}

		.p1{
			margin-top: 20px;
			margin-bottom: 20px;
			font-size: 30px;
			font-weight: bold;
			color: #108BAF;
		}
		.p2{
			padding-left: 241px;
			margin-top: 10px;
			margin-bottom: 20px;
			font-size: 20px;
			font-weight: bold;
			color: #108BAF;
		}
		.p3{
			margin-top: -10px;
			margin-bottom: 10px;
			font-size: 20px;
			font-weight: bold;
			color: #108BAF;
		}
		.d01{
			width:70%;
			height: 900px;
			margin-left: auto;
			margin-right: auto;

			border-left: 5px solid #00BFFF;
			border-top: 5px solid #00BFFF;
			border-bottom: 5px solid #00BFFF;
			border-right: 5px solid #00BFFF;

			padding-left: 40px;
			padding-bottom: 100px;
			margin-top:60px;
			margin-bottom: 60px;

			background-color: #FFFFE0;
			float: top;
		}
		.menu{
			width:15%;
			height: 200px;
			float:left;
			
			padding-right: 25px;
			padding-top: 5px;

		}
		.menu ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		}
		.menu li {
			padding: 10px;
			margin-bottom: 12px;
		    background-color: #33b5e5;
		    color: #ffffff;
		}
		
		.d02{
			margin-top: 37px;
			padding-left: 240px;
			width: 75%;
			height: 300px;
			
		}
		.albumrecom{
			background-color: #aac5e5;
			width: 115px;
			height: 150px;
			float:left;
			margin-bottom: 20px;
			margin-right: 20px;
		}
		
		
		.splitup{
			clear:left;

		}
		.d03{
			float:left;
		}
		

	</style>
</head>

<body>
	<div class="d01">
		
	
	<?php 
		$username = $_POST["username"];
		$upassword = $_POST["upassword"];
		//echo $username;
		//echo $upassword;

		$dbconn = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm")
    	or die('Could not connect: ' . pg_last_error());
    	echo "<div class='menu'>
				<div class='p1'><b>Homepage</b></div>
				<div class='column'>
				<ul>
					<li onclick='HomePageSubmit()'>Home Page</li>
					<form id='formHP' action='login.php' method = 'post'>
					<input name=username type='hidden' value='";echo $username;echo "'>
					<input name=upassword type='hidden' value='";echo $upassword;echo "'>
					</form>

					
					
					<li onclick='PlaylistSubmit()'>Playlist</li>
					<form id='formPl' action='playlist.php' method = 'post'>
					<input name=username type='hidden' value='";echo $username;echo "'>
					<input name=upassword type='hidden' value='";echo $upassword;echo "'>
					</form>


					<li onclick='javascript:Likesubmit()'>Like</li>
					<form id='formlike' action='likepage.php' method = 'post'>
					<input name=username type='hidden' value='";echo $username;echo "'>
					<input name=upassword type='hidden' value='";echo $upassword;echo "'>
					</form>

					<li onclick='followsubmit()'>Following</li>
					<form id='formfollow' action='followpage.php' method = 'post'>
					<input name=username type='hidden' value='";echo $username;echo "'>
					<input name=upassword type='hidden' value='";echo $upassword;echo "'>
					</form>

					<li onclick='followbysubmit()'>Followed By</li>
					<form id='formfollowby' action='followbypage.php' method = 'post'>
					<input name=username type='hidden' value='";echo $username;echo "'>
					<input name=upassword type='hidden' value='";echo $upassword;echo "'>
					</form>

					<li onclick='RateSubmit()'>Rate</li>
					<form id='formrate' action='rate.php' method = 'post'>
					<input name=username type='hidden' value='";echo $username;echo "'>
					<input name=upassword type='hidden' value='";echo $upassword;echo "'>
					</form>

					<li>Search<br><br>
					<form action='Search.php' method = 'post'>
					<input name=username type='hidden' value='";echo $username;echo "'>
					<input name=upassword type='hidden' value='";echo $upassword;echo "'>
					<input name=searchkey type='text'><br><br>
					<input type='submit' value='Go'>
					</form></li>
					
   				</ul>
				</div>




			</div>";

    	$querylp = "SELECT artisttitle from likeartist where username = '$username'";

    	$resultlp = pg_query($querylp) or die('Query failed: ' . pg_last_error());

    	$templike="The artists you are following:";
    	echo "<div class='d02'>
    	<h2 style='color: #108BAF;'>$templike</h2>";
		$i=0;
		while ($linelp = pg_fetch_array($resultlp, null, PGSQL_ASSOC)) {	
			
			foreach ($linelp as $col_valuelp) {
				echo "<p style='font-size: 18px; font-family: Georgia' 
				onclick='document.getElementById(";echo '"formlike';echo $i; echo '"';echo ").submit();'>
				<br>$col_valuelp</p>";
				echo "<form id='formlike$i' action='artist.php' method = 'post'>
				<input name=username type='hidden' value='";echo $username;echo "'>
				<input name=upassword type='hidden' value='";echo $upassword;echo "'>
				<input name=artisttitle type='hidden' value='";echo $col_valuelp;echo "'>
				</form>
				";
			}
			$i++;
		}
        echo "</div>";

        // Free resultset
		pg_free_result($result);

		// Closing connection
		pg_close($dbconn);
	?>
	</div>
</body>

</html>


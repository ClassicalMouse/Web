<html>
<head>
	<title>Remove</title>
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
			/*function RemoveTrack(trackid1,pid1) {
				var msg = confirm("Are you sure you want to delete this track from the playlist?");

    			if (msg) {
     				window.location = "playlist.php?did="+trackid1 +"playlist.php?did2="+pid1;
   				}
			}*/
			function addtoplaylist(){

			}

	</script>
	<style type="text/css">
		body{
			background-color: #F0F8FF;
		}
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 700px;
		    margin-bottom: 30px;
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
			margin-top: 30px;
			margin-bottom: 10px;
			margin-left: 10px;
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
		.d01{
			width:70%;
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
			padding-left: 210px;
			width: 75%;
			/*height: 300px;*/
			float:top;
			
		}
		.albumrecom{
			/*border: 3px solid #10A0F0;*/

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
			$username=$_POST["username"];
			$upassword=$_POST["upassword"];
			$pid=$_POST["pid"];

			
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

			
		</div>
		<div class='d02'>";

			$dbconn = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm") or die('Could not connect: ' . pg_last_error());
			
			
			$querya="delete from playlisttrack where pid='$pid'";
			$queryb="delete from playlist where pid = '$pid'";
			$resulta=pg_query($querya) or die('Query failed: ' . pg_last_error());
			$resultb=pg_query($queryb) or die('Query failed: ' . pg_last_error());
			
			$queryx="select pid, ptittle from playlist where username='$username' ";
			$resultx=pg_query($queryx) or die('Query failed: ' . pg_last_error());
			
			

			//if (isset($_GET['hello'])) {
			//    RemoveTrack();
			//}





			echo '<h2>My Playlist ';
			echo '</h2>';

			$a=0;
			while ($line = pg_fetch_array($resultx, null, PGSQL_ASSOC)) {
			    $i=0;
			    foreach ($line as $col_value) {
			    	$bufferx = pg_fetch_result($resultx, $a, 1);
			        if($i==0){
			        	$query1="select trackid, trackname,trackartist 
			        	from playlist natural join playlisttrack natural join track
			        	where pid = '$col_value'";
			        	$result1=pg_query($query1) or die('Query failed: ' . pg_last_error());
			        	$result2=pg_query($query1) or die('Query failed: ' . pg_last_error());
			        	$num=$a+1;
			        	$temp0=$col_value;
			        	echo "<h3>$num. $bufferx</h3>";
			        	echo '<form action="removeplaylist.php" method = "post">
						<input name="username" type="hidden" value="';
						echo $username;
						echo '">
					
						<input name="upassword" type="hidden" value="';
						echo $upassword;
						echo '">

						<input name="pid" type="hidden" value="';
						echo $temp0;
						echo '">

						<input type="submit" value="Remove">

					</form>';
			        	echo "<table>\n";
						echo "<tr><th>No</th><th>Track</th><th>Artist</th><th>Option</th><th>Option</th></tr>";
			        	$k=1;
			        	while($line1 = pg_fetch_array($result1, null, PGSQL_ASSOC)){
			        		$j=0;
			        		foreach ($line1 as $col_value1) {
			        			if($j==1){
						        	echo "<tr><td>$k.</td>";
						        	echo "<td>$col_value1</td>";

						        	$t=$k-1;
						        	$temp1=pg_fetch_result($result2, $t, 0);
						        	
						        }
						        if($j==2){
						        	echo "<td onclick='document.getElementById('artistform";
						        	echo $k;
						        	echo "').submit();' style='cursor: pointer'>$col_value1</td>";
						        	echo '<form id="artistform';
						        	echo $k;
						        	echo '" action="artist.php" method = "post">';
									echo '<input name="username" type="hidden" value="';
									echo $username;
									echo '">';
									echo '<input name="upassword" type="hidden" value="';
									echo $upassword;
									echo '">';
									echo '<input name="artisttitle" type="hidden" value="';
									echo $col_value1;
									echo '">';
									echo '</form>';
						        	//echo "<td><a href=\"?pidpid=$temp0&tidtid=$temp1\">Remove</a></td>";

						        	echo '<td>';
						        	echo '<form action="remove.php" method = "post">
										<input name="username" type="hidden" value="';
										echo $username;
										echo '">
									
										<input name="upassword" type="hidden" value="';
										echo $upassword;
										echo '">
										
										<input name="trackid" type="hidden" value="';
										echo $temp1;
										echo '">

										<input name="pid" type="hidden" value="';
										echo $temp0;
										echo '">

										<input type="submit" value="Remove">

									</form>';
						        	echo '</td>';

						        	echo "<td><a onclick='javascript:addtoplaylist()' >Add to Playlist</a></td></tr>";
						        }
						        
						        
						        $j++;
			        		}$k++;
			        	}
			        	echo "</table>";

			        }

			        $i++;
			    }$a++;
			    
			}

			echo '<form action="newplaylist.php" method = "post">

			<input name="username" type="hidden" value="';
			echo $username;
			echo '">
		
			<input name="upassword" type="hidden" value="';
			echo $upassword;
			echo '">

			<input type="submit" value="Create New Playlist">

			</form>';




			// Free resultset
			pg_free_result($result);

			// Closing connection
			pg_close($dbconn);

			?>
		</div>
	</div>

</body>

</html>


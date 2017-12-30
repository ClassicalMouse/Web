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
			function showList(o) {
                hideList("dropdown-content" + o.id);
                document.getElementById("dropdown-" + o.id).classList.toggle("show");
            }


            function hideList(option) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.id != option) {
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }


            window.onclick = function(e) {
                if (!e.target.matches('.dropbtn')) {
                    hideList("");
                }
            }
            





	</script>
	<title>Search!</title>
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
			padding-left: 241px;
			margin-top: -10px;
			margin-bottom: 10px;
			font-size: 20px;
			font-weight: bold;
			color: #108BAF;
		}
		.p5{
			margin-left: 200px;
			margin-top: 10px;
			margin-bottom: 10px;
			font-size: 18px;
			font-weight: bold;
			
		}
		.hp2{
			margin-left: 200px;
			margin-top: 10px;
			margin-bottom: 10px;
			font-size: 22px;
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
			padding-left: 200px;
			width: 75%;
			
			
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
		li a, .dropbtn {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover, .dropdown:hover .dropbtn {
            background-color: #1f75cf;
        }
        li.dropdown {
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fafafa;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            color: white;
            background-color: #1f75cf;
        }
        .show {
            display: block;
        }
		

	</style>
</head>

<body>
	<div class="d01">
		
	
	<?php 
		$username = $_POST["username"];
		$upassword = $_POST["upassword"];
		$searchkey = $_POST["searchkey"];
		//echo $username;
		//echo $upassword;

		$dbconn = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm")
    	or die('Could not connect: ' . pg_last_error());

    	//if($username==Null){
    	//	echo 'Please enter your username!';
    	//}
    	//if($upassword==Null){
    	//	echo 'Please enter your password!';
    	//}


    	
        
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

		$query1 = "SELECT username from users where username like '%$searchkey%' escape'~'";

		$result1 = pg_query($query1) or die('Query failed: ' . pg_last_error());

		$i1=0;
		$temp1="Users with username similar to $searchkey:";
		echo "<h2 class='hp2'>$temp1</h2><div class='p5'>";
		while($line1 = pg_fetch_array($result1, null, PGSQL_ASSOC)){
			foreach($line1 as $col_value1){
				$ii1=$i1+1;
				echo "$ii1.&nbsp&nbsp";
				echo "$col_value1<br><br>";
				$querytest2="select * from follow where username in (select username from follow where fusername='$username') and username ='$col_value1'";
				$resulttest2= pg_query($querytest2) or die('Query failed: ' . pg_last_error());
				if(pg_fetch_result($resulttest2, 0, 0)==null){

				echo "
				<form action='tofollow.php' method = 'post'>
				<input name=username type='hidden' value='";echo $username;echo "'>
				<input name=upassword type='hidden' value='";echo $upassword;echo "'>
				<input name=fusername type='hidden' value='";echo $col_value1;echo "'>
				<input type='submit' value='follow'>
				</form>";}
				

			}
			$i1++;
		}
		echo "</div>";




		$query2 = "SELECT trackname,trackid from track where trackname like '%$searchkey%' escape'~' limit 10";

		$result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());

		$i2=0;
		$temp2="Songs with names related to $searchkey:";
		echo "<h2 class='hp2'>$temp2</h2><div class='p5'>";
		while($line2 = pg_fetch_array($result2, null, PGSQL_ASSOC)){
			$iii2=0;
			foreach($line2 as $col_value2){
				if($iii2==0){
				$ii2=$i2+1;
				echo "<br>$ii2.&nbsp&nbsp";
				echo "$col_value2";}
				if($iii2==1){
					$temp1=$col_value2;
				


				$query23="select ptittle, pid from playlist where username='$username'";
	        	$result23=pg_query($query23) or die('Query failed: ' . pg_last_error());
	        	echo '<li class="dropdown">
		                <a id="';echo $i2;echo '" href="javascript:void(0)" class="dropbtn" onclick="showList(this)">Add to Playlist</a>
		                <div class="dropdown-content" id="dropdown-';echo $i2;echo '" onmouseleave="hideList(this)">';
		                $d=0;
		                while ($line23 = pg_fetch_array($result23, null, PGSQL_ASSOC)) {
						    $c=0;
						    foreach ($line23 as $col_value23) {
						    	//$buffer3 = pg_fetch_result($result3, $c, 0);
						    	//$buffer4 = pg_fetch_result($result3, $c, 1);
            					if($c==0){
            						$buffer23=$col_value23;
								}
								if($c==1){
									$buffer24=$col_value23;
								
		                    	echo "<a onclick='document.getElementById(";echo '"addplaylist';echo $i2,$d;echo '").';echo "submit()'> $buffer23</a>";
					            
					            echo '<form id="addplaylist';echo $i2,$d;echo '" action="addplaylist.php" method = "post">
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
								echo $buffer24;
								echo '"></form>';
							
								}

							$c++;
		                    }$d++;
		                    
		                }
		            
						echo '</div></li>';
					}$iii2++;		            				           

			}
			$i2++;
		}
		echo "</div>";




		$query3 = "SELECT ptittle, username from playlist where ptittle like '%$searchkey%' escape'~' and privacy=0 limit 10";

		$result3 = pg_query($query3) or die('Query failed: ' . pg_last_error());

		$i3=0;
		$temp3="Playlist with title related to $searchkey:";
		echo "<h2 class='hp2'>$temp3</h2><div class='p5'>";
		while($line3 = pg_fetch_array($result3, null, PGSQL_ASSOC)){
			$d3=0;
			foreach($line3 as $col_value3){
				$ii3=$i3+1;

				if($d3==0){
					
					echo "$ii3.&nbsp&nbsp";
					echo "$col_value3<br><br>";
				}
				if($d3==1){
					echo "by $col_value3<br><br>";
					$querytest32="select * from follow where username in (select username from follow where fusername='$username') and username ='$col_value3'";
					$resulttest32= pg_query($querytest32) or die('Query failed: ' . pg_last_error());
					if(pg_fetch_result($resulttest32, 0, 0)==null){

					echo "
					<form action='tofollow.php' method = 'post'>
					<input name=username type='hidden' value='";echo $username;echo "'>
					<input name=upassword type='hidden' value='";echo $upassword;echo "'>
					<input name=fusername type='hidden' value='";echo $col_value3;echo "'>
					<input type='submit' value='follow'>
					</form>";}
				}
				$d3++;
			}
			$i3++;
		}
		echo "</div>";



		$query4 = "SELECT artisttitle from artist where artisttitle like '%$searchkey%' escape'~' limit 10";

		$result4 = pg_query($query4) or die('Query failed: ' . pg_last_error());

		$i4=0;
		$temp4="Artist with name related to $searchkey:";
		echo "<h2 class='hp2'>$temp4</h2><div class='p5'>";
		while($line4 = pg_fetch_array($result4, null, PGSQL_ASSOC)){
			$d4=0;
			foreach($line4 as $col_value4){
				$ii4=$i4+1;

				if($d4==0){
					
					echo "$ii4.&nbsp&nbsp";
					echo "$col_value4<br><br>";
				
					?>
					<form id="form4<?php echo $d4;  ?>" action="artist.php" method = "post">
					<input name="username" type="hidden" value="<?php echo $username;?>">
					<input name="upassword" type="hidden" value="<?php echo $upassword;?>">
					<input name="artisttitle" type="hidden" value="<?php echo $col_value4;?>">
					<input type="submit" value="view artist">
					</form><?php
				}
				$d4++;
			}
			$i4++;
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


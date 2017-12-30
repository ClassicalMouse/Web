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
			height: 1500px;
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
			$username=$_POST["username"];
			$upassword=$_POST["upassword"];
			$trackid=$_POST["trackid"];
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
			
			$queryx="select pid, ptittle from playlist where username='$username' ";
			$resultx=pg_query($queryx) or die('Query failed: ' . pg_last_error());
			
			$querya="delete from playlisttrack where trackid='$trackid' and pid='$pid'";
			$resulta=pg_query($querya) or die('Query failed: ' . pg_last_error());
			

			//if (isset($_GET['hello'])) {
			//    RemoveTrack();
			//}
/*
			if(isset(_GET['pidpid'])&&isset(_GET['tidtid'])){
				
				RemoveTrack(_GET['tidtid'],_GET['pidpid']);

			}
			function RemoveTrack($tt1,$tt2){
				$dbconna = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm") or die('Could not connect: ' . pg_last_error());
			    $querya="delete from playlisttrack where trackid='$tt1' and pid='$tt2'";
			    $resulta=pg_query($querya) or die('Query failed: ' . pg_last_error());
			    pg_free_result($result);
				pg_close($dbconn);
			    echo "here";
			
			}*/




			echo '<h2>My Playlist ';
			echo '</h2>';

			$a=0;
			while ($line = pg_fetch_array($resultx, null, PGSQL_ASSOC)) {
			    $i=0;
			    $rname=="";
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
						        	/*echo "<td onclick='document.getElementById('artistform";echo $k;echo "').submit();' style='cursor: pointer'>$col_value1</td>";
						        	echo '<form id="artistform';echo $k;echo '" action="artist.php" method = "post">';
									echo '<input name="username" type="hidden" value="';echo $username;echo '">';
									echo '<input name="upassword" type="hidden" value="';echo $upassword;echo '">';
									echo '<input name="artisttitle" type="hidden" value="';echo $col_value1;echo '">';
									echo '</form>';*/
						        	//echo "<td><a href=\"?pidpid=$temp0&tidtid=$temp1\">Remove</a></td>";

									?><td onclick="document.getElementById('artistform<?php echo $k;?>').submit();" style="cursor: pointer"><?php echo $col_value1; ?></td><?php
						        	echo '<form id="artistform';echo $k;echo '" action="artist.php" method = "post">';
									echo '<input name="username" type="hidden" value="';echo $username;echo '">';
									echo '<input name="upassword" type="hidden" value="';echo $upassword;echo '">';
									echo '<input name="artisttitle" type="hidden" value="';echo $col_value1;echo '">';
									echo '</form>';


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
						        	$query3="select ptittle, pid from playlist where username='$username'";
						        	$result3=pg_query($query3) or die('Query failed: ' . pg_last_error());
						        	echo '<td><li class="dropdown">
							                <a id="';echo $i,$k;echo '" href="javascript:void(0)" class="dropbtn" onclick="showList(this)">Add to Playlist</a>
							                <div class="dropdown-content" id="dropdown-';echo $i,$k;echo '" onmouseleave="hideList(this)">';
							                $d=0;
							                while ($line3 = pg_fetch_array($result3, null, PGSQL_ASSOC)) {
											    $c=0;
											    foreach ($line3 as $col_value3) {
											    	//$buffer3 = pg_fetch_result($result3, $c, 0);
											    	//$buffer4 = pg_fetch_result($result3, $c, 1);
			                    					if($c==0){
			                    						$buffer3=$col_value3;
													}
													if($c==1){
														$buffer4=$col_value3;
													
							                    	echo "<a onclick='document.getElementById(";echo '"addplaylist';echo $a,$k,$d;echo '").';echo "submit()'> $buffer3</a>";
										            
										            echo '<form id="addplaylist';echo $a,$k,$d;echo '" action="addplaylist.php" method = "post">
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
													echo $buffer4;
													echo '"></form>';
												
													}

												$c++;
							                    }$d++;
							                    
							                }




							                echo '</div>
							            </li>
							            </td></tr>';
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

			/*echo $temp1;									
			echo $buffer3;
			echo "<br>";
			echo $buffer4;*/
/*<<<something{$}
something
*/

/*echo <<<EDT <a onclick="document.getElementById('addplaylist').submit()">{$buffer3}</a>
EDT;			*/	
			?>

		</div>
	</div>

</body>

</html>


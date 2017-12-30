<html>
<head>
	<title>Artist</title>
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
			margin-top: 20px;
			margin-bottom: 20px;
			font-size: 24px;
			font-weight: bold;
			color: #108BAF;
		}
		.p4{
			font-size: 16px;
			color: black;
			font-family: Georgia;
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
			$artisttitle=$_POST["artisttitle"];
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



				</div>";

		$dbconn = pg_connect("host=localhost port=5433 dbname=project2 user=postgres password=963963mm") or die('Could not connect: ' . pg_last_error());

		$querytest="select trackid from playlist natural join users natural join playlisttrack where username='$username' and pid='$pid' and trackid='$trackid'";
		$resulttest=pg_query($querytest) or die('Query failed: ' . pg_last_error());
		if(pg_fetch_result($resulttest, 0, 0)==$trackid)
		{
			echo '<script>alert("This song already exists in this playlist!");</script>';
		}
		else{

			$trackid=pg_escape_string($trackid);
			$queryx1="insert into playlisttrack(pid,trackid)values($pid, '$trackid');";

			$resultx1=pg_query($queryx1) or die('Query failed: ' . pg_last_error());
		}

			
		$artisttitle = pg_escape_string($artisttitle);
		$queryx="select artistdescription from artist where artisttitle='$artisttitle' ";
		$resultx=pg_query($queryx) or die('Query failed: ' . pg_last_error());

		$bufferx=pg_fetch_result($resultx,0,0);

		$query2="select artisttitle from likeartist where artisttitle='$artisttitle' and username='$username'";
		$result2=pg_query($query2) or die('Query failed: ' . pg_last_error());
		$buffer2=pg_fetch_result($result2,0,0);
			
		$query3="select trackid,trackname, count(*) from
			(select trackid, trackname from playtrack natural join track 
			where trackid in 
				(select trackid 
				from track 
				where trackartist='$artisttitle') ) as temp1
			group by trackid, trackname
			order by count(*) DESC limit 5";
		$result3=pg_query($query3) or die('Query failed: ' . pg_last_error());
		
		

		?>
		<div class='d02'>
			<div class="p3"><?php echo $artisttitle;?></div>
			
			<form id="form1" action="
				<?php if($buffer2<>null){echo 'unlikeartist.php';}
				else{echo 'likeartist.php';}
				?>"method = "post">

					<input name="username" type="hidden" value="<?php echo $username;?>">
					<input name="upassword" type="hidden" value="<?php echo $upassword;?>">
					<input name="artisttitle" type="hidden" value="<?php echo $artisttitle;?>">
			</form>
				<?php
				if($buffer2<>null){
					echo '<button id="likeartist" type="button" onclick="document.getElementById(';
					echo "'form1'";
					echo ').submit()" >Unlike</button>';
				}else{
					echo '<button id="likeartist" type="button" onclick="document.getElementById(';
					echo "'form1'";
					echo ').submit()">Like</button>';
				}
				
				?>
			
			<?php echo "<p class='p3'>Artist description:<br></p><p class='p4'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$bufferx</p>"; ?>

			<p class='p3'>People are listening to these songs:</p>
			<?php
			$t=0;
			$j=1; echo "<table><tr><th>No</th><th>Track</th><th>Option</th></tr>";
			while ($line = pg_fetch_array($result3, null, PGSQL_ASSOC)) {
			    //echo "\t<tr>\n\t<tr>\n";
			    $i=0;
			    foreach ($line as $col_value) {
			    	//$buffer3=pg_fetch_result($result3,0,1);
			    	if($i==0){
				    	$temp1=$col_value;
				    }
			        if($i==1){
			        	echo "<tr><td>$j.</td>";
			        	echo "<td>$col_value</td>";
		        		$query33="select ptittle, pid from playlist where username='$username'";
			        	$result33=pg_query($query33) or die('Query failed: ' . pg_last_error());
			        	echo '<td><li class="dropdown">
				                <a id="';echo $t;echo '" href="javascript:void(0)" class="dropbtn" onclick="showList(this)">Add to Playlist</a>
				                <div class="dropdown-content" id="dropdown-';echo $t;echo '" onmouseleave="hideList(this)">';
				                $d=0;
				                while ($line3 = pg_fetch_array($result33, null, PGSQL_ASSOC)) {
								    $c=0;
								    foreach ($line3 as $col_value3) {
								    	//$buffer3 = pg_fetch_result($result3, $c, 0);
								    	//$buffer4 = pg_fetch_result($result3, $c, 1);
                    					if($c==0){
                    						$buffer3=$col_value3;
										}
										if($c==1){
											$buffer4=$col_value3;
										
				                    	echo "<a onclick='document.getElementById(";echo '"addplaylist';echo $t,$d;echo '").';echo "submit()'> $buffer3</a>";
							            
							            echo '<form id="addplaylist';echo $t,$d;echo '" action="artistadd.php" method = "post">
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
										echo '">

										<input name="artisttitle" type="hidden" value="';
										echo $artisttitle;
										echo '">
										</form>';
									
										}

									$c++;
				                    }$d++;
				                    
				                }




				                echo '</div>
				            </li>
				            </td></tr>';
			        
			        }
			        
			        $i++;
			    }
			    $j++;$t++;

			    
			}
			/*
				(select trackname from playtrack natural join track 
				where trackname in 
					(select trackname 
					from track 
					where trackartist='$artisttitle')
					limit 5 
				)*/
			if($j<=6){
				$s=6-$j;
				$query4="
				select trackid, trackname from
				(select distinct trackname, trackid 
				from artist join track on track.trackartist=artist.artisttitle 
				where artisttitle='$artisttitle' and trackname not in 
				(select trackname from
					(select trackid,trackname, count(*) from
						(select trackid, trackname from playtrack natural join track 
						where trackid in 
							(select trackid 
							from track 
							where trackartist='$artisttitle') ) as temp1
						group by trackid, trackname
						order by count(*) DESC limit 5)as temp1
				) 
				order by trackid
				limit $s)as temp2";
				$result4=pg_query($query4) or die('Query failed: ' . pg_last_error());
				while ($line2 = pg_fetch_array($result4, null, PGSQL_ASSOC)) {
			    	
			    	$ii=0;
				    foreach ($line2 as $col_value2) {
				    	if($ii==0){
				    		$temp1=$col_value2;
				    	}
				        if($ii==1){
				        	echo "<tr><td>$j.</td>";
				        	echo "<td>$col_value2</td>";
				        	$query33="select ptittle, pid from playlist where username='$username'";
					        	$result33=pg_query($query33) or die('Query failed: ' . pg_last_error());
					        	echo '<td><li class="dropdown">
						                <a id="';echo $t;echo '" href="javascript:void(0)" class="dropbtn" onclick="showList(this)">Add to Playlist</a>
						                <div class="dropdown-content" id="dropdown-';echo $t;echo '" onmouseleave="hideList(this)">';
						                $d=0;
						                while ($line3 = pg_fetch_array($result33, null, PGSQL_ASSOC)) {
										    $c=0;
										    foreach ($line3 as $col_value3) {
										    	//$buffer3 = pg_fetch_result($result3, $c, 0);
										    	//$buffer4 = pg_fetch_result($result3, $c, 1);
		                    					if($c==0){
		                    						$buffer3=$col_value3;
												}
												if($c==1){
													$buffer4=$col_value3;
												
						                    	echo "<a onclick='document.getElementById(";echo '"addplaylist';echo $t,$d;echo '").';echo "submit()'> $buffer3</a>";
									            
									            echo '<form id="addplaylist';echo $t,$d;echo '" action="artistadd.php" method = "post">
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
												echo '">

												<input name="artisttitle" type="hidden" value="';
												echo $artisttitle;
												echo '">

												</form>';
											
												}

											$c++;
						                    }$d++;
						                    
						                }




						                echo '</div>
						            </li>
						            </td></tr>';
				        
				        }
				        
				        $ii++;
				    }$j++;$t++;
				    
				    
				}
			}echo "</table>";?>

		</div>
	</div>

</body>

</html>


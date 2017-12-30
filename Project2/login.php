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
            
            $(document).ready(function() {
			  $('#formplay0').submit(function() {
			    jQuery.ajax({
			    url: 'playtrack.php',
			    data: $('#formplay0').serialize(),
			    type: "POST",
			    beforeSend: function()
			    {
			    },
			    success: function()
			    {

			    }
			    });
			    return false;
			    });
			  });
            $(document).ready(function() {
			  $('#formplay1').submit(function() {
			    jQuery.ajax({
			    url: 'playtrack.php',
			    data: $('#formplay1').serialize(),
			    type: "POST",
			    beforeSend: function()
			    {
			    },
			    success: function()
			    {

			    }
			    });
			    return false;
			    });
			  });
            $(document).ready(function() {
			  $('#formplay2').submit(function() {
			    jQuery.ajax({
			    url: 'playtrack.php',
			    data: $('#formplay2').serialize(),
			    type: "POST",
			    beforeSend: function()
			    {
			    },
			    success: function()
			    {

			    }
			    });
			    return false;
			    });
			  });
            $(document).ready(function() {
			  $('#formplay3').submit(function() {
			    jQuery.ajax({
			    url: 'playtrack.php',
			    data: $('#formplay3').serialize(),
			    type: "POST",
			    beforeSend: function()
			    {
			    },
			    success: function()
			    {

			    }
			    });
			    return false;
			    });
			  });
            $(document).ready(function() {
			  $('#formplay4').submit(function() {
			    jQuery.ajax({
			    url: 'playtrack.php',
			    data: $('#formplay4').serialize(),
			    type: "POST",
			    beforeSend: function()
			    {
			    },
			    success: function()
			    {

			    }
			    });
			    return false;
			    });
			  });
            $(document).ready(function() {
			  $('#formplay5').submit(function() {
			    jQuery.ajax({
			    url: 'playtrack.php',
			    data: $('#formplay5').serialize(),
			    type: "POST",
			    beforeSend: function()
			    {
			    },
			    success: function()
			    {

			    }
			    });
			    return false;
			    });
			  });
            $(document).ready(function() {
			  $('#formplay6').submit(function() {
			    jQuery.ajax({
			    url: 'playtrack.php',
			    data: $('#formplay6').serialize(),
			    type: "POST",
			    beforeSend: function()
			    {
			    },
			    success: function()
			    {

			    }
			    });
			    return false;
			    });
			  });
			  
				function clickNum0(){          
			    document.getElementById('formplay0').submit();    
			  }  

			  function clickNum1(){          
			    document.getElementById('formplay1').submit();    
			  }  
			  function clickNum2(){          
			    document.getElementById('formplay2').submit();    
			  }  

				function clickNum3(){          
			    document.getElementById('formplay3').submit();    
			  }  

				function clickNum4(){          
			    document.getElementById('formplay4').submit();   

			  }  
			  function clickNum5(){          
			    document.getElementById('formplay5').submit();    
			  }  

				function clickNum6(){          
			    document.getElementById('formplay6').submit();    
			  }  

				function clickNum7(){          
			    document.getElementById('formplay7').submit();    
			  }  

				function clickNum8(){          
			    document.getElementById('formplay8').submit();    
			  }  





	</script>
	<title>Welcome Back!</title>
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

    	$query = "SELECT upassword from users where username = '$username'";

    	$result = pg_query($query) or die('Query failed: ' . pg_last_error());

		$buffer = pg_fetch_result($result, 0, 0);
        if($buffer==$upassword)
        {
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
			$temp1="New Album Release";
			echo '<div class="d02"><div class="p2">';
			echo "$temp1"; 
			echo '</div>';
			$query2="
			select albumname, albumid, max(albumreleasedate) as albumreleasedate
			from(select albumname, max(albumid) as albumid 
				from track natural join album where trackartist in 
				(select artisttitle from likeartist where username = '$username')
				group by albumname) as nameidset natural join album
			group by albumname, albumid
			order by albumreleasedate DESC limit 10";
			$result2 = pg_query($query2) or die('Query failed: ' . pg_last_error());
			$i=0;
			while($i<5){
				$buffer2 = pg_fetch_result($result2, $i, 0);
				$buffer3 = pg_fetch_result($result2, $i, 1);
				if($buffer2<>null){
					echo '<div class="albumrecom" onclick=document.getElementById("form';
					echo $i;
					echo '").submit() style="cursor: pointer;">';
					echo $buffer2;
					echo '<form id="form';
					echo $i;
					echo '" action="Album.php" method = "post">
						<input name="gotoalbum" type="hidden" value="';
					echo $buffer2;
					echo '"><input name="gotoalbum2" type="hidden" value="';
					echo $buffer3;
					echo '">
					<input name=username type="hidden" value="';
					echo $username;
					echo '">
					<input name=upassword type="hidden" value="';
					echo $upassword;
					echo '">
					</form>';
					echo '</div>';
				}
				$i=$i+1;

			}
			echo "<div class='splitup'></div>";
			while($i<10){
				$buffer2 = pg_fetch_result($result2, $i, 0);
				$buffer3 = pg_fetch_result($result2, $i, 1);

				if($buffer2<>null){
					echo '<div class="albumrecom" onclick=document.getElementById("form';
					echo $i;
					echo '").submit() style="cursor: pointer;">';
					echo $buffer2;
					echo '<form id="form';
					echo $i;
					echo '" action="Album.php" method = "post">
						<input name="gotoalbum" type="hidden" value="';
					echo $buffer2;
					echo '"><input name="gotoalbum2" type="hidden" value="';
					echo $buffer3;
					echo '">
					<input name=username type="hidden" value="';
					echo $username;
					echo '">
					<input name=upassword type="hidden" value="';
					echo $upassword;
					echo '">
					</form>';
					echo '</div>';
				}
				$i=$i+1;
			}
			echo "</div>";

			echo "<div class='splitup'></div>";



			$temp2="New Track Release";



			echo '<div class="d02"><div class="p3">';
			echo "$temp2"; 
			echo '</div>';
			$query3="

			select trackname,trackid,trackartist, max(trackduration) as trackduration 
from track natural join album
where trackartist in 
(select artisttitle from likeartist where username = '$username')
group by trackname,trackid,trackartist
limit 5


			";
/*

			select distinct trackname,trackid, trackartist, max(trackduration)
			from track
			where trackname in(
			select trackname  from (
			select trackname, trackartist, max(trackduration) as trackduration
			from track natural join album 
			where albumid in
			(select albumid from
			(select albumid, max(albumreleasedate) as albumreleasedate
			from (select albumname, max(albumid) as albumid 
				from track natural join album where trackartist in 
				(select artisttitle from likeartist where username = '$username')
				group by albumname) as nameidset2 natural join album
			group by albumname, albumid
			order by albumreleasedate DESC) as albumidset
			)

			and trackartist in (select artisttitle from likeartist where username = '$username')
			group by trackname, trackartist
			limit 5) as tempp
			)
			and trackartist in (select artisttitle from likeartist where username = '$username')
			and trackduration in
				(select trackduration from
				(select trackname, trackartist, max(trackduration) as trackduration
				from track natural join album 
				where albumid in
				(select albumid from
				(select albumid, max(albumreleasedate) as albumreleasedate
				from (select albumname, max(albumid) as albumid 
					from track natural join album where trackartist in 
					(select artisttitle from likeartist where username = '$username')
					group by albumname) as nameidset2 natural join album
				group by albumname, albumid
				order by albumreleasedate DESC) as albumidset
				)
				and trackartist in (select artisttitle from likeartist where username = '$username')
				group by trackname, trackartist
				limit 5) as temppp)
				group by trackname,trackid, trackartist

			";*/
			$result3 = pg_query($query3) or die('Query failed: ' . pg_last_error());
			
			echo "<table>\n";
			//echo "<tr><th>No</th><th>Track</th><th>Artist</th><th>Duration</th></tr>";
			$j=1;
			while ($line = pg_fetch_array($result3, null, PGSQL_ASSOC)) {
			    //echo "\t<tr>\n\t<tr>\n";
			    $i=0;
			    $trackname=pg_fetch_result($result3, $j-1, 0);
			    $trackname = pg_escape_string($trackname);
	        	$queryx="select trackid from track where trackname='$trackname' ";
				$resultx=pg_query($queryx) or die('Query failed: ' . pg_last_error());
				$bufferx = pg_fetch_result($resultx, 0, 0);
				if($bufferx<>null){
					
					$y=0;
				}else{
					$y=1;}
					while($i<=3){
						$col_value=pg_fetch_result($result3, $j-1, $i);
						if($i==0){
					        	echo "<tr><td>$j.</td>";
					        	//if($y==0){
					        		echo '<td onclick="clickNum';echo $j;echo '()"><iframe src="https://open.spotify.com/embed/track/';
									echo $bufferx;
									echo '" width="350" height="80" frameborder="0" allowtransparency="true" onclick="clickNum';echo $j;echo '()"></iframe></td>

									';
									
					        	//}else{
						        	//echo "<td onclick='document.getElementById(";echo '"formplay';echo $j;echo '"';echo").submit()'>$col_value</td>";
						        	//echo "<td onclick='clickNum$j()'>$col_value</td>";
						        	
					        	//}
					        }
					        if($i==1){
					        	$temp1=$col_value;
					        	$ptdate=date('Y-m-d H:i:s');

					        	echo"
									<form id='";echo"formplay$j";echo "' action='playtrack.php' method = 'post' target='rfFrame'>
									<input name=username type='hidden' value='";echo $username;echo "'>
									<input name=upassword type='hidden' value='";echo $upassword;echo "'>
									<input name=trackid type='hidden' value='";echo $temp1;echo "'>
									<input name=ptdate type='hidden' value='";echo $ptdate;echo "'>
									</form>";
									echo  '<iframe style="display: none" id="rfFrame"  name="rfFrame" src="about:blank"></iframe>


								';
					        }
					        if($i==2){
					        	echo "<td onclick='javascript:gotoartist()' style='cursor: pointer'>$col_value</td>";
					        	echo '<form id="artistform" action="artist.php" method = "post">';
								echo '<input name="username" type="hidden" value="';
								echo $username;
								echo '">';
								echo '<input name="upassword" type="hidden" value="';
								echo $upassword;
								echo '">';
								echo '<input name="artisttitle" type="hidden" value="';
								echo $col_value;
								echo '">';
								echo '</form>';
								
					        }
					        if($i==3){

					        	$col_value=($col_value-$col_value % 1000)/1000;
					        	$second=$col_value%60;
					        	$minute=($col_value-$second)/60;
					        	echo "<td>";
					        	echo $minute;
					        	echo "'";
					        	echo $second;
					        	echo "''</td>";
					        	$query5="select ptittle, pid from playlist where username='$username'";
					        	$result5=pg_query($query5) or die('Query failed: ' . pg_last_error());
					        	echo '<td><li class="dropdown">
						                <a id="';echo $j;echo '" href="javascript:void(0)" class="dropbtn" onclick="showList(this)">Add to Playlist</a>
						                <div class="dropdown-content" id="dropdown-';echo $j;echo '" onmouseleave="hideList(this)">';
						                $d=0;
						                while ($line5 = pg_fetch_array($result5, null, PGSQL_ASSOC)) {
										    $c=0;
										    foreach ($line5 as $col_value5) {
										    	//$buffer3 = pg_fetch_result($result3, $c, 0);
										    	//$buffer4 = pg_fetch_result($result3, $c, 1);
		                    					if($c==0){
		                    						$buffer3=$col_value5;
												}
												if($c==1){
													$buffer4=$col_value5;
												
						                    	echo "<a onclick='document.getElementById(";echo '"addplaylist';echo $j,$d;echo '").';echo "submit()'> $buffer3</a>";
									            
									            echo '<form id="addplaylist';echo $j,$d;echo '" action="addplaylist.php" method = "post">
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




						                echo '</div></li>';


					        	echo "</tr>";

					        }  
			        	$i++;					
					}

				
				$j++;
			    
			}
			
			echo "</table>\n";
			
        }
        else{
        	echo'
				<h3>
					Incorrect Username or Password!
				</h3><br>
			';
        }

        // Free resultset
		pg_free_result($result);

		// Closing connection
		pg_close($dbconn);
	?>
	</div>
</body>

</html>


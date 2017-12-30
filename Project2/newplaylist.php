<html>
<head>
	<title>Playlist</title>
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
			height: 700px;
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
		#form1{
			margin-top: 80px;
		}
		
		

	</style>
</head>

<body>
	<div class="d01">
		<?php
			$username=$_POST["username"];
			$upassword=$_POST["upassword"];

			
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

		?>
		<form id="form1" action="createnewplaylist.php" method = "post">

				<script type="text/javascript">
					

					
					function resetlabel1(){
						document.getElementById('alertarea1').innerHTML="";
					}
					function resetlabel2(){
						document.getElementById('alertarea2').innerHTML="";
					}
					

					function isempty(){
						if(document.getElementById('ptittle').value==""){
							document.getElementById('alertarea1').innerHTML="Please enter a playlist title!";
						}
						else if(document.getElementById('privacy').value==""){
							document.getElementById('alertarea2').innerHTML="Please enter privacy setting!";
						}else{
							document.getElementById('form1').submit();
						}
					}
				</script>

				Playlist Title:  <input id="ptittle" onclick="resetlabel1()" name="ptittle" type="text">*<label id="alertarea1"></label>
				<br><br>

				Privacy:  <input id="privacy" name="privacy" type="text" onclick="resetlabel2()">*<label id="alertarea2"></label><br>
				<label style="color: red;">0 for public, 1 for private.</label>
				<br><br>

				<input name="username" type="hidden" value='<?php echo $username;?>'>
				<input name="upassword" type="hidden" value='<?php echo $upassword;?>'>

				<button id="cnp" type="button" onclick="isempty()" >Create New Playlist</button>
				<br>

			</form>

		</div>
	</div>

</body>

</html>


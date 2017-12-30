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
            function resetlabel1(){
				document.getElementById('alertarea1').innerHTML="";
			}
			function resetlabel2(){
				document.getElementById('alertarea2').innerHTML="";
			}
			function resetlabel3(){
				document.getElementById('alertarea3').innerHTML="";
			}
			function resetlabel4(){
				document.getElementById('alertarea4').innerHTML="";
			}
			function resetlabel5(){
				document.getElementById('alertarea5').innerHTML="";
			}
			function resetlabel6(){
				document.getElementById('alertarea6').innerHTML="";
			}

			function isempty(){
				if(document.getElementById('songname').value==""){
					document.getElementById('alertarea1').innerHTML="Please enter a song name!";
				}else if(document.getElementById('artisttitle').value==""){
					document.getElementById('alertarea2').innerHTML="Please enter the artist!";
				}else if(document.getElementById('rating').value==""){
					document.getElementById('alertarea3').innerHTML="Please enter a rating!";
				}else{
					document.getElementById('form1').submit();
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
			height: 500px;

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
		<div class='d02'>"; ?>
			<form id="form1" action="ratesong.php" method = "post">

			Song name:  <input id="songname" onclick="resetlabel1()" name="songname" type="text">*<label id="alertarea1"></label>
			<br><br>

			Artist name:  <input id="artisttitle" name="artisttitle" type="text" onclick="resetlabel2()">*<label id="alertarea2"></label>
			<br><br>

			Rating:  <input id="rating" name="rating" type="text" onclick="resetlabel3()">*<label id="alertarea3"></label>
			<br><br>
			<input id="username" name="username" type="hidden" value="<?php echo $username; ?>">
			<input id="upassword" name="upassword" type="hidden" value="<?php echo $upassword; ?>">
			<button id="caa1" type="button" onclick="isempty()" >Rate</button>


		</div>

	</div>

</body>

</html>


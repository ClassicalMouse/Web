<html>
<head>
	<title>Create Account</title>
	<style type="text/css">
		body{
			background-color: #F0F8FF;
		}
		h2{
			margin-left: 10px;
		}
		label{
			color: red;
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
			padding-bottom: 40px;
			background-color: #FFFFE0;
		}
		.instruction{
			margin-left: 30px;
			margin-right: 20px;
			font-weight: bold;
		}
		.searchform{
			margin-left: 30px;
		}
		#caa1{
			
		}

	</style>
</head>

<body>
	<div class="d01">
		<h2>
			Create Account
		</h2>
		<p class=instruction>Welcome! In order to create an account, you have to enter username, password, your name, your email, and the city that you are living in. <br>
		</p>
		<div class="searchform">
			<form id="form1" action="caa2.php" method = "post">

				<script type="text/javascript">
					function checkpsw(){
						if(upassword.value!=repeatpassword.value){
							document.getElementById('alertarea3').innerHTML="Please enter the right password!";
							document.getElementById('alertarea3').style.color="red";
							//upassword.value="";
							repeatpassword.value="";
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
						if(document.getElementById('username').value==""){
							document.getElementById('alertarea1').innerHTML="Please enter a username!";
						}
						else if(document.getElementById('upassword').value==""){
							document.getElementById('alertarea2').innerHTML="Please enter the password!";
						}
						else if(document.getElementById('repeatpassword').value==""){
							document.getElementById('alertarea3').innerHTML="Please repeat the password!";
						}
						else if(document.getElementById('uname').value==""){
							document.getElementById('alertarea4').innerHTML="Please enter your name!";
						}
						else if(document.getElementById('uemail').value==""){
							document.getElementById('alertarea5').innerHTML="Please enter your email!";
						}
						else if(document.getElementById('ucity').value==""){
							document.getElementById('alertarea6').innerHTML="Please enter the city you are living in!";
						}else{
							document.getElementById('form1').submit();
						}
					}
				</script>

				Username:  <input id="username" onclick="resetlabel1()" name="username" type="text">*<label id="alertarea1"></label>
				<br><br>

				Password:  <input id="upassword" name="upassword" type="password" onclick="resetlabel2()">*<label id="alertarea2"></label>
				<br><br>

				Repeat Password:  <input id="repeatpassword" onclick="resetlabel3()" name="repeatpassword" onchange="checkpsw()" type="password">*<label id="alertarea3"></label>
				<br><br>

				Name:  <input id="uname" onclick="resetlabel4()" name="uname" type="text">*<label id="alertarea4" ></label>
				<br><br>

				Email:  <input id="uemail" onclick="resetlabel5()" name="uemail" type="text">*<label id="alertarea5" ></label>
				<br><br>

				City:  <input id="ucity" onclick="resetlabel6()" name="ucity" type="text">*<label id="alertarea6" ></label>
				<br><br>

				<button id="caa1" type="button" onclick="isempty()" >Create An Account</button>
				<!--<input id="caa1" type="submit" value="Create Account">-->
				<br>

			</form>
		</div>
	</div>
</body>

</html>


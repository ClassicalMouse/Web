<!DOCTYPE html>
<html>
<head>
	<title>Book</title>
	<style type="text/css">
		body{
			background-color: #F0F8FF;
		}
		.d01{
			width:600px;

			border-left: 5px solid #00BFFF;
			border-top: 5px solid #00BFFF;
			border-bottom: 5px solid #00BFFF;
			border-right: 5px solid #00BFFF;

			padding-left: 20px;
			padding-bottom: 20px;

			margin-top:60px;
			margin-left: 50px;

			background-color: #FFFFE0;
		}
	</style>
</head>
<body>

<?php  
echo "<div class='d01'>";
$cname = $_POST["cname"];
$rname = $_POST["rname"];
$NOP = $_POST["NOP"]; 
$bdate = $_POST["bdate"]; 
echo "<h2>Booked!</h2>";
echo "<b>Name:</b> $cname<br>";
echo "<b>Restaurant:</b> $rname<br>","<b>Number of People:</b> $NOP<br>","<b>Time:</b> $bdate<br>";

$dbconn = pg_connect("host=localhost port=5433 dbname=HW3 user=postgres password=963963mm") or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$cid="";
$query = "SELECT cid FROM customer WHERE cname = '$cname'";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
	foreach ($line as $col_value) {
	    $cid=$col_value;
	}
}

$query = "SELECT rid FROM restaurant WHERE rname = '$rname'";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
	foreach ($line as $col_value) {
	    $rid=$col_value;
	}
}
//echo "cid: $cid<br>"; echo "rid: $rid<br>";

echo "<h2>Your previous booking:</h2>";
$query = "SELECT cname, rname, btime, quantity FROM booking natural join customer natural join restaurant WHERE cid = '$cid';";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
echo "<table>\n";

while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n\t<tr>\n";
	$i=0;
	echo "<tr><td>--------------------------------------------------------------------</td><tr>";
    foreach ($line as $col_value) {
        //echo "\t\t<tr><td>$col_value</td></tr>\n";
        if($i==0){
        	echo "\t\t<tr><td><b>Name: </b>$col_value</td></tr>\n";
        }
        if($i==1){
        	echo "\t\t<tr><td><b>Restaurant: </b>$col_value</td></tr>\n";
        }
        if($i==2){
        	echo "\t\t<tr><td><b>Time: </b>$col_value</td></tr>\n";
        }
        if($i==3){
        	echo "\t\t<tr><td><b>Number of people: </b>$col_value</td></tr>\n";
        }
        $i++;
    }
    
    
    echo "\t</tr>\n\t</tr>\n";
    
}
echo "<tr><td>--------------------------------------------------------------------</td><tr>";

$query = "INSERT INTO booking (bid, cid, rid, btime, quantity) VALUES (Default, '$cid','$rid','$bdate','$NOP');";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());


// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
echo "</div>";

?>
</body>
</html>
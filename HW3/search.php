<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
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
<div class="d01">
	<h2>Available Restaurants</h2>

<?php
	$cname = $_POST["cname"];
	/*echo "Hello, ".$cname; echo "<br>";*/
	$keyword = $_POST["keyword"]; 
	/*echo $keyword; echo "<br>";*/
	$NOP = $_POST["NOP"]; 
	/*echo $NOP;  echo "<br>";*/
	$bdate = $_POST["bdate"]; 
	/*echo $bdate; echo "<br>";*/

// Connecting, selecting database
$dbconn = pg_connect("host=localhost port=5433 dbname=HW3 user=postgres password=963963mm")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
if($NOP==NULL)
	$NOP=0;

if($keyword == NULL){
	$query = "SELECT rname, raddress, description, capacity FROM RESTAURANT WHERE capacity >= $NOP AND rid NOT IN 
	(SELECT rid from
	(SELECT rid, btime FROM 
	(SELECT rid,btime, sum(quantity) as sumquan 
	FROM BOOKING natural join RESTAURANT 
	WHERE btime = '$bdate' 
	GROUP BY rid, btime 
	) as TEMP1
	Where sumquan+'$NOP'> capacity )as TEMP2)";
}
else{
	$query = "SELECT rname, raddress, description, capacity 
	FROM RESTAURANT 
	WHERE capacity >= $NOP 
	AND (rname LIKE '%$keyword%' or description LIKE '%$keyword%') 
	AND rid NOT IN 
	(SELECT rid from
	(SELECT rid, btime FROM 
	(SELECT rid,btime, sum(quantity) as sumquan 
	FROM BOOKING natural join RESTAURANT 
	WHERE btime = '$bdate' 
	GROUP BY rid, btime 
	) as TEMP1
	Where sumquan+'$NOP'> capacity )as TEMP2);";
}
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
echo "<tr><td>--------------------------------------------------------------------</td><tr>";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n\t<tr>\n";
    $i=0;
    $rname=="";
    foreach ($line as $col_value) {
        //echo "\t\t<tr><td>$col_value</td></tr>\n";
        if($i==0){
        	$rname=$col_value;
        	echo "<tr><td><b>Restaurant name:</b> $col_value</td></tr>";
        }
        if($i==1){
        	echo "<tr><td><b>Address:</b> $col_value</td></tr>";
        }
        if($i==2){
        	echo "<tr><td><b>Description:</b> $col_value</td></tr>";
        }
        if($i==3){
        	echo "<tr><td><b>Capacity:</b> $col_value</td></tr>";
        }
        $i++;
    }

    echo "
    <tr><td>

    <form action='book.php' method = 'post'>
    	<input type='hidden' name='cname' value='$cname'>
	    <input type='hidden' name='rname' value='$rname'>
	    <input type='hidden' name='NOP' value='$NOP'>
	    <input type='hidden' name='bdate' value='$bdate'>
	    <input value='Book' type='submit'>
    </form>
    </td></tr>";
    echo "<tr><td>--------------------------------------------------------------------</td><tr>";

    echo "\t</tr>\n\t</tr>\n";
    
}
echo "<tr><td></td></tr>";
echo "<tr><td><button><a href='http://localhost:8888/HW3/'>Back</a></button><td><tr>";
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);

?>
</div>
</body>
</html>

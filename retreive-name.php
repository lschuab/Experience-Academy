<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "esdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, nameexp,descexp,exptype,donamt,ngoname,ngocat,proname,promail,pronum,proadd,prodesc FROM experience";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	$row_cnt = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)) {
		
		$nameexp = $row["nameexp"];
		$descexp = $row["descexp"];
		$exptype = $row["exptype"];
		$donamt = $row["donamt"];
		$ngoname = $row["ngoname"];
		$ngocat = $row["ngocat"];
		$proname = $row["proname"];
		$promail = $row["promail"];
		$pronum = $row["pronum"];
		$proadd = $row["proadd"];
		$prodesc = $row["prodesc"];
		
        echo $row["nameexp"]. "-";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
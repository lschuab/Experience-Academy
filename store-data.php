<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "esdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//print_r($_POST);
$nameexp = $_POST["nameexp"];
$descexp = $_POST["descexp"];
$exptype = $_POST["exptype"];
$donamt = $_POST["donamt"];
$ngoname = $_POST["ngoname"];
$ngocat = $_POST["ngocat"];
$proname = $_POST["proname"];
$promail = $_POST["promail"];
$pronum = $_POST["pronum"];
$proadd = $_POST["proadd"];
$prodesc = $_POST["prodesc"];



$sql = "INSERT INTO experience (nameexp,descexp,exptype,donamt,ngoname,ngocat,proname,promail,pronum,proadd,prodesc) VALUES ('$nameexp','$descexp','$exptype','$donamt','$ngoname','$ngocat','$proname','$promail','$pronum','$proadd','$prodesc')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
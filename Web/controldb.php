<?php
$servername = "localhost";
$username = "root";
$password = "q1w2e3r4";
$dbname = "smarthome"

//echo "$_POST[item]";
$item = "$_POST[item]";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$selectsql="SELECT * from general where ";
$result = $conn->query($selectsql);

$state=-1;

if($result->num_rows>0)
{
    $row = $result->fetch_assoc();
    
    switch($item){
        case 1: $state = 0; break; //All current Check
        case 2: $state = $row["light1"]; break;
        case 3: $state = $row["light2"]; break;
        case 4: $state = $row["light3"]; break;
        case 4: $state = $row["light4"]; break;
        case 5: $state = $row["bedlight"]; break;
        case 6: $state = $row["aircon"]; break;
        case 7: $state = $row["heater"]; break;
        case 8: $state = $row["window"]; break;
        case 9: $state = $row["alarm"]; break;
    }
}else
{
    die("0 results" . $conn->connect_error);
}






$insertsql="INSERT INTO control (item, state) VALUES ('$item')";

if (!mysql_query($sql,$con))
{
  die('Error: ' . mysql_error());
}

mysql_close($con)

header('Location: /control.php');
?>

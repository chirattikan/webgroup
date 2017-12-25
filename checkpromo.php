<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "nongkhaipromo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn,"utf8");

$name = $_POST['name'];

$check = mysqli_query($conn,"SELECT * FROM savepromo WHERE name = '$name' ");
if($check->num_rows > 0) {
    echo "havedata";
}
else if($check->num_rows == 0){
    echo "nodata";

}

?>
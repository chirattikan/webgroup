<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "nongkhaipromo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn,"utf8");

$name = $_POST['name'];

$del = "DELETE FROM savepromo  WHERE name = '$name'";

if (mysqli_query($conn, $del)) {
    echo "delete successfully";
} else {
    echo "Error delete : " . mysqli_error($conn);
}
?>
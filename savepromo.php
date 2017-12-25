<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "nongkhaipromo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn,"utf8");

$name = $_POST['name'];
$description = $_POST['description'];
$link = $_POST['link'];
$img = $_POST['img'];

$check = mysqli_query($conn,"SELECT * FROM savepromo WHERE name = '$name' ");
if($check->num_rows > 0) {
    echo "unsave";
}
else if($check->num_rows == 0){
    $sqlsave = "INSERT INTO savepromo (name, description , link , img ) VALUES ('$name', '$description' , '$link' , '$img')";  

    if (mysqli_query($conn, $sqlsave)) {
        echo "save $name successfully";
    } else {
        echo "Error save $name : " . mysqli_error($conn);
    }
}

?>
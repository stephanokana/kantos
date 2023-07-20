<?php

$id = $_GET['ID'];
echo ("delete". $id);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myd_b";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM messages WHERE id = '$id'";
if(mysqli_query($conn, $sql)){

    header("Location: Admin.php");
    echo "<script>alert('Deleted Successfully'); </script>";

} else{
    echo "Error: " .$sql. "<br>" .mysqli_error($conn);
}

?>
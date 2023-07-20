<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENT</title>
    <style>
        table, tr, td, th {
            border-collapse: collapse;
            border: 1px solid #000;
        }
        table {
            width: 80%;
            margin: 0 auto;
        }
        td, th {
            padding: 10px;
            text-transform: capitalize;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        a {
            padding: 5px 10px;
            text-decoration: none;
            background: red;
            color: white;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid red;
        }
        a:hover {
            padding: 5px 10px;
            border: 1px solid red;
            color: red;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myd_b";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `messages`"; // Fix: Updated table name to `messages`
$result = $conn->query($sql);

echo "<h1>Sent Message</h1>";

if ($result->num_rows > 0) {
    echo "
    <table>
    <tr>
        <th>id</th>
        <th>FullName</th>
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
    </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>".$row["id"]."</td>
            <td>".$row["FullName"]."</td>
            <td>".$row["Email"]."</td>
            <td>".$row["Message"]."</td>
            <td><a href='delete.php?ID=".$row['id']."'>Delete</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No results found.</p>";
}

$conn->close();
?>

<a href="index.php">Go back to webpage</a> <!-- Adjust the URL accordingly -->

</body>
</html>

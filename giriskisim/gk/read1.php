<?php
include "db.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user where id=17";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
 $row=mysqli_fetch_assoc($result);
    echo "id: " . $row["id"]. " - Name: " . $row["user"]. " " . $row["pass"]. "<br>";
  
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
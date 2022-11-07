<?php
$servername = "localhost";
$db="mert";
$username = "mert";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<?php
// POST OLARAK İndex.php den ekleniyor
//   $sql = "INSERT INTO user (user, pass)
//   VALUES ('mert', yılmaz')";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   $last_id = $conn->lastInsertId();
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
?>


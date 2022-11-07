<?php
require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="container">

<form method="POST" action="">
<div class="col-md-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kullanici Adi</label>
    <input type="name" name="name" class="form-control" >
 
  </div>
  </div>

  <div class="col-md-5">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="name" name="pass" class="form-control" id="exampleInputPassword1">
    
  </div>
  </div>

  <button type="submit" name="giris" class="btn btn-primary">Giriş Yap</button>
</form>
</div>
</body>
</html>
<?php


 if(isset($_POST["giris"])){
$isim=$_POST["name"];
$pass=$_POST["pass"];

  $sql = "INSERT INTO user (user, pass)
  VALUES ('$isim', '$pass')";
  // use exec() because no results are returned
  $conn->exec($sql);
  $last_id = $conn->lastInsertId();
  echo "Ekleme İşlemi Başarılı. Eklenenin ID : " . $last_id;


}

?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
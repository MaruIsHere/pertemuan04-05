<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>

<!-- data yang diinput akan muncul atau disimpan atau dikirimkan ke addressbar (menggunakan GET)  -->
<!-- iseet = jika ada data yang masuk menggunakan method yang berisi nilai -->
<?php  

    if(isset($_GET["txUSER"])) {
    $user = $_GET["txUSER"];
    if($user == null){
        echo "<div>Username Belom Diisikan</div>";
    }
    }else{
        echo "<div>Error</div>";
    }


?>
  
<table border="black 1px solid">

<form action ="latihan01.php" method = "GET">

  <tr>
    <td><label>User :</label></td>
    <td><input type="text" id="txUSER" name="txUSER"></td>
  </tr>

  <tr>
  <td><label>Password :</label></td>
  <td><input type="password" id="txPASKEY" name="txPASKEY"></td>
  </tr>

  <tr>
  <td><button type="submit" name="submit">Login</button></td>
  <td><button><a href="daftar.php">Daftar</button></td>
  </tr>

</form>

</table>


    
</body>
</html>


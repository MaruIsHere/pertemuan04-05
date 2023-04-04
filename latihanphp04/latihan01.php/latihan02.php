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
<!-- tetapi kalo menggunakan POST data yang diinput dform tidak disimpan ke addresbar -->

<?php  

    if(isset($_POST["txUSER"])) {
    $user = $_POST["txUSER"];
    if($user == null){
        echo "<div>Password/Username Salah</div>";
    }
    }

    if(isset($_POST["txPASKEY"])) {
        $pwd = $_POST["txUSER"];
        if($pwd== null){
            echo "<div>Password/Username Salah</div>";
        }
        }


?>
  
  
<table border="black 1px solid">

<form action ="latihan02.php" method = "POST">

  <tr>
    <td><label>User :</label></td>
    <td><input type="text" id="text" name="txUSER"></td>
  </tr>

  <tr>
  <td><label>Password :</label></td>
  <td><input type="password" id="password" name="txPASKEY"></td>
  </tr>

  <tr>
  <td><button type="submit" name="submit">Login</button></td>
  <td><button><a href="daftar.php">Daftar</button></td>
  </tr>

</form>

</table>


    
</body>
</html>


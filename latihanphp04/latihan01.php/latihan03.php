<?php
$path = 'upload/';
if(isset($_POST['uploadfile'])){
    if($_FILES['flGAMBAR']['error']==0){ //melakukan pengecekan apakah file sudah masuk atau belum
        $flname = $path .basename($_FILES['flGAMBAR']['name']); //mengambil nama dan tempat dipindahkan
        move_uploaded_file($_FILES['flGAMBAR']['tmp_name'], $flname); //lalu melakukan perpindahan dari file tmp(default) ke $flname
        echo '<div>File uploaded successfully.</div>';
    }else{
        echo '<div>Failed to upload.</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>



<table border="black 1px solid">

<form action ="latihan03.php" method = "POST" enctype="multipart/form-data"> <!-- mengambil data binary (biasanya untuk upload jpg) -->

  <tr>
    <td><label>Upload Gambar :</label></td>
    <td><input type="File" name="flGAMBAR"></td> 
  </tr>

  <tr>
    <td><label>Gambar :</label></td>
    <td><?php 
        if(isset($_POST['uploadfile'])){
        echo "<img src='" . $flname . "'";;
        }?>
    </td> 
  </tr>

  <tr>
  <td><input type="hiden" name="uploadfile" value="OK"></td>
  <td><button type="submit" name="submit">Upload Gambar</button></td>
  </tr>

</form>

</table>
    
</body>
</html>
<?php

include "koneksi.php";

$Deskripsi = $_POST['Deskripsi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;

$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){
  
  $sql = $pdo->prepare("INSERT INTO portofolio(Deskripsi,foto) VALUES(:Deskripsi,:foto)");
  $sql->bindParam(':Deskripsi', $Deskripsi);
  $sql->bindParam(':foto', $fotobaru);
  $sql->execute(); 
  if($sql){ 
    header("location: index.php"); 
  }else{
  
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>






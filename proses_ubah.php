<?php

include "koneksi.php";

$id = $_GET['id'];

$Deskripsi = $_POST['Deskripsi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

if(empty($foto)){ 
  $sql = $pdo->prepare("UPDATE portofolio SET Deskripsi=:Deskripsi WHERE id=:id");
  $sql->bindParam(':Deskripsi', $Deskripsi);
  $sql->bindParam(':id', $id);
  $execute = $sql->execute(); 
  if($sql){ 
    header("location: index.php"); 
  }else{
  
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}else{
  $fotobaru = date('dmYHis').$foto;
  
  $path = "images/".$fotobaru;
  
  if(move_uploaded_file($tmp, $path)){ 
  
    $sql = $pdo->prepare("SELECT foto FROM portofolio WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute(); 
    $data = $sql->fetch(); 
    
    if(is_file("images/".$data['foto'])) 
      unlink("images/".$data['foto']); 
   
    $sql = $pdo->prepare("UPDATE portofolio SET Deskripsi=:Deskripsi,foto=:foto WHERE id=:id");
    $sql->bindParam(':Deskripsi', $Deskripsi);
    $sql->bindParam(':foto', $fotobaru);
    $sql->bindParam(':id', $id);
    $execute = $sql->execute(); 
    if($sql){ 
      header("location: index.php"); 
    }else{
      
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
  }else{
   
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}
?>







